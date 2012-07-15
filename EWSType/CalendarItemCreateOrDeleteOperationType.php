<?php
/**
 * Definition of the CalendarItemCreateOrDeleteOperationType type.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarItemCreateOrDeleteOperationType type.
 */
class EWSType_CalendarItemCreateOrDeleteOperationType extends EWSType
{
    /**
     * Send to no recipients.
     *
     * @var string
     */
    const SEND_TO_NONE = 'SendToNone';

    /**
     * Send to all recipients but do not save a copy.
     *
     * @var string
     */
    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    /**
     * Send to all recipients and save a copy.
     *
     * @var string
     */
    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    /**
     * Constructor
     */
    public function __construct()
    {
    }
}
