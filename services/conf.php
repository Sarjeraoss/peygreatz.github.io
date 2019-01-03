<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "localhost";
    public $DB_USER     = "root";
    public $DB_PASSWORD = "";
    public $DB_NAME     = "markeet";

    /* FCM key for notification */
    public $FCM_KEY     = "AIzaSyBZ5C4WzoPQo7ysyqh0yZ_UShS2ujr5RAA";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
    public $SECURITY_CODE = "umZV7rzSHfyDMWKBpqgyKPIzYouxoaiGGrv5i91rpy7y6bmLsf48jNOyJbAawdXtTDYlQhIlvtNvPB0xH05x7Z6FWgYar3FWTwPF";

    /* Mailer config ---------------------------------------------------- */

    // change with yours
    public $SMTP_EMAIL      = "sarshelar@gmail.com";
    public $SMTP_PASSWORD   = "nayahaiwaha";
    public $SMTP_HOST       = "mail.gmail.com";
    public $SMTP_PORT       = 562;

    // for administrator & for buyer
    public $SUBJECT_EMAIL_NEW_ORDER = "Market New Order";
    public $TITLE_REPORT_NEW_ORDER  = "Market New Order";

    // for buyer
    public $SUBJECT_EMAIL_ORDER_PROCESSED   = "Order PROCESSED";
    public $TITLE_REPORT_ORDER_PROCESSED    = "Order Status Change to PROCESSED";

    public $SUBJECT_EMAIL_ORDER_UPDATED     = "Order Data Updated";
    public $TITLE_REPORT_ORDER_UPDATED      = "Order Data Updated By Admin";
}

?>