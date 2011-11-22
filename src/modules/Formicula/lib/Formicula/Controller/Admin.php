<?php
/**
 * Formicula - the contact mailer for Zikula
 * -----------------------------------------
 *
 * @copyright  (c) Formicula Development Team
 * @link       https://github.com/landseer/Formicula
 * @license    GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author     Frank Schummertz <frank@zikula.org>
 * @package    Third_Party_Components
 * @subpackage formicula
 */

class Formicula_Controller_Admin extends Zikula_AbstractController
{
    public function postInitialize()
    {
        $this->view->setCaching(false);
    }

    /**
     * main
     * main entry point for configuration
     *
     *@param none
     *@returns view output
     */
    public function main()
    {
        return $this->view();
    }

    /**
     * edit
     * editing existing and adding new contacts
     *
     *@param cid int contact id, -1 for new contacts
     *@returns view output
     */
    public function edit()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_ADD)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        // Create output object
        $form = FormUtil::newForm('Formicula', $this);

        // Return the output that has been generated by this function
        return $form->execute('admin/edit.tpl', new Formicula_Form_Handler_Admin_Edit());
    }

    /**
     * delete
     * deletes an existing contact from the database
     * When called for the first time its produces an "Are you sure?" page. If the admin
     * clicks on OK, confirmation is set and the function deletes the entry
     *
     *@param cid int contact id
     *@param confirmation string any value
     *@returns view output on error or forwards to view()
     */
    public function delete()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_DELETE)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        $cid          = (int)FormUtil::getPassedValue('cid', -1, 'GETPOST');
        $confirmation =      FormUtil::getPassedValue('confirmation', '', 'GETPOST');

        $contact = ModUtil::apiFunc('Formicula', 'admin', 'getContact',
                                    array('cid' => $cid));

        if ($contact == false) {
            return LogUtil::registerError($this->__('Unknown Contact'), null, ModUtil::url('Formicula', 'admin', 'main'));
        }

        // Check for confirmation.
        if (empty($confirmation)) {
            $this->view->assign('contact', $contact);
            return $this->view->fetch('admin/delete.tpl');
        }

        // Confirm security token code
        $this->checkCsrfToken();        

        if (ModUtil::apiFunc('Formicula', 'admin', 'deleteContact', array('cid' => $cid))) {
            // Success
            LogUtil::registerStatus($this->__('Contact has been deleted'));
        }

        return System::redirect(ModUtil::url('Formicula', 'admin', 'view'));
    }

    /**
     * view
     * show list of contacts
     *
     *@param none
     *@returns view output
     */
    public function view()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        // read all items
        $allcontacts = ModUtil::apiFunc('Formicula', 'admin', 'readContacts');
        // only use those where we have the necessary rights for
        $allowedcontacts = array();
        foreach ($allcontacts as $contact) {
            $cid = $contact['cid'];
            if (SecurityUtil::checkPermission('Formicula::', ":$cid:", ACCESS_EDIT)) {
                $allowedcontact = array('cid'        => $contact['cid'],
                                        'name'       => $contact['name'],
                                        'email'      => $contact['email'],
                                        'public'     => $contact['public'],
                                        'sname'      => $contact['sname'],
                                        'semail'     => $contact['semail'],
                                        'ssubject'   => $contact['ssubject'],
                                        'acc_edit'   => true,
                                        'acc_delete' => SecurityUtil::checkPermission('Formicula::', ":$cid:", ACCESS_DELETE));
                array_push($allowedcontacts, $allowedcontact);
            }
        }
        $this->view->assign('contacts', $allowedcontacts);
        return $this->view->fetch('admin/view.tpl');
    }

    /**
     * view
     * show list of contacts
     *
     *@param none
     *@returns view output
     */
    public function viewsubmits()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        $allsubmits = ModUtil::apiFunc('Formicula', 'admin', 'getFormSubmits');
        $this->view->assign('formsubmits', $allsubmits);

        return $this->view->fetch('admin/viewsubmits.tpl');
    }

    /**
     * displaysubmit
     * show a specific form submission
     *
     *@param sid int formsubmit id
     *@returns view output
     */
    public function displaysubmit()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        $sid = (int)FormUtil::getPassedValue('sid', -1, 'GETPOST');

        $submit = ModUtil::apiFunc('Formicula', 'admin', 'getFormSubmit', array('sid' => $sid));
        $submit['customdata'] = unserialize($submit['customdata']);
        $this->view->assign('submit', $submit);

        return $this->view->fetch('admin/displaysubmit.tpl');
    }

    /**
     * deleteSubmit
     * deletes an existing contact from the database
     * When called for the first time its produces an "Are you sure?" page. If the admin
     * clicks on OK, confirmation is set and the function deletes the entry
     *
     *@param cid int contact id
     *@param confirmation string any value
     *@returns view output on error or forwards to view()
     */
    public function deletesubmit()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_DELETE)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        $sid = (int)FormUtil::getPassedValue('sid', -1, 'GETPOST');
        $confirmation = FormUtil::getPassedValue('confirmation', '', 'GETPOST');

        $submit = ModUtil::apiFunc('Formicula', 'admin', 'getFormSubmit', array('sid' => $sid));
        if ($submit == false) {
            return LogUtil::registerError($this->__('Unknown form submit'), null, ModUtil::url('Formicula', 'admin', 'main'));
        }

        // Check for confirmation.
        if (empty($confirmation)) {
            $this->view->assign('submit', $submit);
            return $this->view->fetch('admin/deletesubmit.tpl');
        }

        // Confirm security token code
        $this->checkCsrfToken();        

        if (ModUtil::apiFunc('Formicula', 'admin', 'deleteSubmit', array('sid' => $sid))) {
            // Success
            LogUtil::registerStatus($this->__('Form submit has been deleted'));
        }

        return System::redirect(ModUtil::url('Formicula', 'admin', 'viewsubmits'));
    }

    /**
     * modifyconfig
     * main entry point for configuration of module behaviour
     *
     *@param none
     *@returns view output
     */
    public function modifyconfig()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // check necessary environment
        Formicula_Util::envcheck();

        // Create output object
        $form = FormUtil::newForm('Formicula', $this);

        // Return the output that has been generated by this function
        return $form->execute('admin/modifyconfig.tpl', new Formicula_Form_Handler_Admin_ModifyConfig());
    }

    /**
     * clear image cache
     *
     */
    public function clearcache()
    {
        if (!SecurityUtil::checkPermission('Formicula::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError(System::getHomepageUrl());
        }

        // clear the image cache
        $temp = System::getVar('temp');
        if(StringUtil::right($temp, 1) <> '/') {
            $temp .= '/';
        }
        $path = $temp . 'formicula_cache/';

        $dh = opendir($path);

        while(($file = readdir($dh)) !== false) {
            $osfile = DataUtil::formatForOS($file);
            if ($file != '.' && $file != '..' && $file != '.htaccess' && $file != 'index.htm' && $file != 'index.html') {
                unlink("${path}/${osfile}");
            }
        }

        closedir($dh);

        LogUtil::registerStatus($this->__('The captcha image cache has been cleared'));
        return System::redirect(ModUtil::url('Formicula', 'admin', 'main'));
    }
}