<?php
/**
 * Formicula - the contact mailer for Zikula
 * -----------------------------------------
 *
 * @copyright  (c) Formicula Development Team
 * @link       http://code.zikula.org/formicula 
 * @version    $Id$
 * @license    GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author     Frank Schummertz <frank@zikula.org>
 * @package    Third_Party_Components
 * @subpackage formicula
 */

function Formicula_tables()
{
    // Initialise table array
    $dbtable = array();

    // Get the name for the template item table.  This is not necessary
    // but helps in the following statements and keeps them readable
    $dbtable['formcontacts'] = DBUtil::getLimitedTablename('formcontacts');

    // Set the column names.  Note that the array has been formatted
    // on-screen to be very easy to read by a user.
    $dbtable['formcontacts_column'] = array('cid'      => 'pn_cid',
                                            'name'     => 'pn_name',
                                            'email'    => 'pn_email',
                                            'public'   => 'pn_public',
                                            'sname'    => 'pn_sname',
                                            'semail'   => 'pn_semail',
                                            'ssubject' => 'pn_ssubject');

    $dbtable['formcontacts_column_def'] = array('cid'      => "I AUTO PRIMARY",
                                                'name'     => "C(40) NOTNULL DEFAULT ''",
                                                'email'    => "C(80) NOTNULL DEFAULT ''",
                                                'public'   => "I1 NOTNULL DEFAULT  0",
                                                'sname'    => "C(40) NOTNULL DEFAULT ''",
                                                'semail'   => "C(80) NOTNULL DEFAULT ''",
                                                'ssubject' => "C(80) NOTNULL DEFAULT ''");

    // Return the table information
    return $dbtable;
}
