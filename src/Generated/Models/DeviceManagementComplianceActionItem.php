<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementComplianceActionItem extends Entity implements Parsable 
{
    /**
     * @var DeviceManagementComplianceActionType|null $actionType What action to take. Possible values are: noAction, notification, block, retire, wipe, removeResourceAccessProfiles, pushNotification, remoteLock.
    */
    private ?DeviceManagementComplianceActionType $actionType = null;
    
    /**
     * @var int|null $gracePeriodHours Number of hours to wait till the action will be enforced. Valid values 0 to 8760
    */
    private ?int $gracePeriodHours = null;
    
    /**
     * @var array<string>|null $notificationMessageCCList A list of group IDs to speicify who to CC this notification message to. This collection can contain a maximum of 100 elements.
    */
    private ?array $notificationMessageCCList = null;
    
    /**
     * @var string|null $notificationTemplateId What notification Message template to use
    */
    private ?string $notificationTemplateId = null;
    
    /**
     * Instantiates a new deviceManagementComplianceActionItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementComplianceActionItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementComplianceActionItem {
        return new DeviceManagementComplianceActionItem();
    }

    /**
     * Gets the actionType property value. What action to take. Possible values are: noAction, notification, block, retire, wipe, removeResourceAccessProfiles, pushNotification, remoteLock.
     * @return DeviceManagementComplianceActionType|null
    */
    public function getActionType(): ?DeviceManagementComplianceActionType {
        return $this->actionType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionType' => function (ParseNode $n) use ($o) { $o->setActionType($n->getEnumValue(DeviceManagementComplianceActionType::class)); },
            'gracePeriodHours' => function (ParseNode $n) use ($o) { $o->setGracePeriodHours($n->getIntegerValue()); },
            'notificationMessageCCList' => function (ParseNode $n) use ($o) { $o->setNotificationMessageCCList($n->getCollectionOfPrimitiveValues()); },
            'notificationTemplateId' => function (ParseNode $n) use ($o) { $o->setNotificationTemplateId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the gracePeriodHours property value. Number of hours to wait till the action will be enforced. Valid values 0 to 8760
     * @return int|null
    */
    public function getGracePeriodHours(): ?int {
        return $this->gracePeriodHours;
    }

    /**
     * Gets the notificationMessageCCList property value. A list of group IDs to speicify who to CC this notification message to. This collection can contain a maximum of 100 elements.
     * @return array<string>|null
    */
    public function getNotificationMessageCCList(): ?array {
        return $this->notificationMessageCCList;
    }

    /**
     * Gets the notificationTemplateId property value. What notification Message template to use
     * @return string|null
    */
    public function getNotificationTemplateId(): ?string {
        return $this->notificationTemplateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionType', $this->actionType);
        $writer->writeIntegerValue('gracePeriodHours', $this->gracePeriodHours);
        $writer->writeCollectionOfPrimitiveValues('notificationMessageCCList', $this->notificationMessageCCList);
        $writer->writeStringValue('notificationTemplateId', $this->notificationTemplateId);
    }

    /**
     * Sets the actionType property value. What action to take. Possible values are: noAction, notification, block, retire, wipe, removeResourceAccessProfiles, pushNotification, remoteLock.
     *  @param DeviceManagementComplianceActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?DeviceManagementComplianceActionType $value ): void {
        $this->actionType = $value;
    }

    /**
     * Sets the gracePeriodHours property value. Number of hours to wait till the action will be enforced. Valid values 0 to 8760
     *  @param int|null $value Value to set for the gracePeriodHours property.
    */
    public function setGracePeriodHours(?int $value ): void {
        $this->gracePeriodHours = $value;
    }

    /**
     * Sets the notificationMessageCCList property value. A list of group IDs to speicify who to CC this notification message to. This collection can contain a maximum of 100 elements.
     *  @param array<string>|null $value Value to set for the notificationMessageCCList property.
    */
    public function setNotificationMessageCCList(?array $value ): void {
        $this->notificationMessageCCList = $value;
    }

    /**
     * Sets the notificationTemplateId property value. What notification Message template to use
     *  @param string|null $value Value to set for the notificationTemplateId property.
    */
    public function setNotificationTemplateId(?string $value ): void {
        $this->notificationTemplateId = $value;
    }

}
