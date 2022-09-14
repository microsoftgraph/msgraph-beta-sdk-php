<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $approvalOnElevation true if the approval is required when activate the role. false if the approval is not required when activate the role.
    */
    private ?bool $approvalOnElevation = null;
    
    /**
     * @var array<string>|null $approverIds List of Approval ids, if approval is required for activation.
    */
    private ?array $approverIds = null;
    
    /**
     * @var DateInterval|null $elevationDuration The duration when the role is activated.
    */
    private ?DateInterval $elevationDuration = null;
    
    /**
     * @var bool|null $isMfaOnElevationConfigurable true if mfaOnElevation is configurable. false if mfaOnElevation is not configurable.
    */
    private ?bool $isMfaOnElevationConfigurable = null;
    
    /**
     * @var bool|null $lastGlobalAdmin Internal used only.
    */
    private ?bool $lastGlobalAdmin = null;
    
    /**
     * @var DateInterval|null $maxElavationDuration Maximal duration for the activated role.
    */
    private ?DateInterval $maxElavationDuration = null;
    
    /**
     * @var bool|null $mfaOnElevation true if MFA is required to activate the role. false if MFA is not required to activate the role.
    */
    private ?bool $mfaOnElevation = null;
    
    /**
     * @var DateInterval|null $minElevationDuration Minimal duration for the activated role.
    */
    private ?DateInterval $minElevationDuration = null;
    
    /**
     * @var bool|null $notificationToUserOnElevation true if send notification to the end user when the role is activated. false if do not send notification when the role is activated.
    */
    private ?bool $notificationToUserOnElevation = null;
    
    /**
     * @var bool|null $ticketingInfoOnElevation true if the ticketing information is required when activate the role. false if the ticketing information is not required when activate the role.
    */
    private ?bool $ticketingInfoOnElevation = null;
    
    /**
     * Instantiates a new PrivilegedRoleSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedRoleSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRoleSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRoleSettings {
        return new PrivilegedRoleSettings();
    }

    /**
     * Gets the approvalOnElevation property value. true if the approval is required when activate the role. false if the approval is not required when activate the role.
     * @return bool|null
    */
    public function getApprovalOnElevation(): ?bool {
        return $this->approvalOnElevation;
    }

    /**
     * Gets the approverIds property value. List of Approval ids, if approval is required for activation.
     * @return array<string>|null
    */
    public function getApproverIds(): ?array {
        return $this->approverIds;
    }

    /**
     * Gets the elevationDuration property value. The duration when the role is activated.
     * @return DateInterval|null
    */
    public function getElevationDuration(): ?DateInterval {
        return $this->elevationDuration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalOnElevation' => function (ParseNode $n) use ($o) { $o->setApprovalOnElevation($n->getBooleanValue()); },
            'approverIds' => function (ParseNode $n) use ($o) { $o->setApproverIds($n->getCollectionOfPrimitiveValues()); },
            'elevationDuration' => function (ParseNode $n) use ($o) { $o->setElevationDuration($n->getDateIntervalValue()); },
            'isMfaOnElevationConfigurable' => function (ParseNode $n) use ($o) { $o->setIsMfaOnElevationConfigurable($n->getBooleanValue()); },
            'lastGlobalAdmin' => function (ParseNode $n) use ($o) { $o->setLastGlobalAdmin($n->getBooleanValue()); },
            'maxElavationDuration' => function (ParseNode $n) use ($o) { $o->setMaxElavationDuration($n->getDateIntervalValue()); },
            'mfaOnElevation' => function (ParseNode $n) use ($o) { $o->setMfaOnElevation($n->getBooleanValue()); },
            'minElevationDuration' => function (ParseNode $n) use ($o) { $o->setMinElevationDuration($n->getDateIntervalValue()); },
            'notificationToUserOnElevation' => function (ParseNode $n) use ($o) { $o->setNotificationToUserOnElevation($n->getBooleanValue()); },
            'ticketingInfoOnElevation' => function (ParseNode $n) use ($o) { $o->setTicketingInfoOnElevation($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isMfaOnElevationConfigurable property value. true if mfaOnElevation is configurable. false if mfaOnElevation is not configurable.
     * @return bool|null
    */
    public function getIsMfaOnElevationConfigurable(): ?bool {
        return $this->isMfaOnElevationConfigurable;
    }

    /**
     * Gets the lastGlobalAdmin property value. Internal used only.
     * @return bool|null
    */
    public function getLastGlobalAdmin(): ?bool {
        return $this->lastGlobalAdmin;
    }

    /**
     * Gets the maxElavationDuration property value. Maximal duration for the activated role.
     * @return DateInterval|null
    */
    public function getMaxElavationDuration(): ?DateInterval {
        return $this->maxElavationDuration;
    }

    /**
     * Gets the mfaOnElevation property value. true if MFA is required to activate the role. false if MFA is not required to activate the role.
     * @return bool|null
    */
    public function getMfaOnElevation(): ?bool {
        return $this->mfaOnElevation;
    }

    /**
     * Gets the minElevationDuration property value. Minimal duration for the activated role.
     * @return DateInterval|null
    */
    public function getMinElevationDuration(): ?DateInterval {
        return $this->minElevationDuration;
    }

    /**
     * Gets the notificationToUserOnElevation property value. true if send notification to the end user when the role is activated. false if do not send notification when the role is activated.
     * @return bool|null
    */
    public function getNotificationToUserOnElevation(): ?bool {
        return $this->notificationToUserOnElevation;
    }

    /**
     * Gets the ticketingInfoOnElevation property value. true if the ticketing information is required when activate the role. false if the ticketing information is not required when activate the role.
     * @return bool|null
    */
    public function getTicketingInfoOnElevation(): ?bool {
        return $this->ticketingInfoOnElevation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('approvalOnElevation', $this->approvalOnElevation);
        $writer->writeCollectionOfPrimitiveValues('approverIds', $this->approverIds);
        $writer->writeDateIntervalValue('elevationDuration', $this->elevationDuration);
        $writer->writeBooleanValue('isMfaOnElevationConfigurable', $this->isMfaOnElevationConfigurable);
        $writer->writeBooleanValue('lastGlobalAdmin', $this->lastGlobalAdmin);
        $writer->writeDateIntervalValue('maxElavationDuration', $this->maxElavationDuration);
        $writer->writeBooleanValue('mfaOnElevation', $this->mfaOnElevation);
        $writer->writeDateIntervalValue('minElevationDuration', $this->minElevationDuration);
        $writer->writeBooleanValue('notificationToUserOnElevation', $this->notificationToUserOnElevation);
        $writer->writeBooleanValue('ticketingInfoOnElevation', $this->ticketingInfoOnElevation);
    }

    /**
     * Sets the approvalOnElevation property value. true if the approval is required when activate the role. false if the approval is not required when activate the role.
     *  @param bool|null $value Value to set for the approvalOnElevation property.
    */
    public function setApprovalOnElevation(?bool $value ): void {
        $this->approvalOnElevation = $value;
    }

    /**
     * Sets the approverIds property value. List of Approval ids, if approval is required for activation.
     *  @param array<string>|null $value Value to set for the approverIds property.
    */
    public function setApproverIds(?array $value ): void {
        $this->approverIds = $value;
    }

    /**
     * Sets the elevationDuration property value. The duration when the role is activated.
     *  @param DateInterval|null $value Value to set for the elevationDuration property.
    */
    public function setElevationDuration(?DateInterval $value ): void {
        $this->elevationDuration = $value;
    }

    /**
     * Sets the isMfaOnElevationConfigurable property value. true if mfaOnElevation is configurable. false if mfaOnElevation is not configurable.
     *  @param bool|null $value Value to set for the isMfaOnElevationConfigurable property.
    */
    public function setIsMfaOnElevationConfigurable(?bool $value ): void {
        $this->isMfaOnElevationConfigurable = $value;
    }

    /**
     * Sets the lastGlobalAdmin property value. Internal used only.
     *  @param bool|null $value Value to set for the lastGlobalAdmin property.
    */
    public function setLastGlobalAdmin(?bool $value ): void {
        $this->lastGlobalAdmin = $value;
    }

    /**
     * Sets the maxElavationDuration property value. Maximal duration for the activated role.
     *  @param DateInterval|null $value Value to set for the maxElavationDuration property.
    */
    public function setMaxElavationDuration(?DateInterval $value ): void {
        $this->maxElavationDuration = $value;
    }

    /**
     * Sets the mfaOnElevation property value. true if MFA is required to activate the role. false if MFA is not required to activate the role.
     *  @param bool|null $value Value to set for the mfaOnElevation property.
    */
    public function setMfaOnElevation(?bool $value ): void {
        $this->mfaOnElevation = $value;
    }

    /**
     * Sets the minElevationDuration property value. Minimal duration for the activated role.
     *  @param DateInterval|null $value Value to set for the minElevationDuration property.
    */
    public function setMinElevationDuration(?DateInterval $value ): void {
        $this->minElevationDuration = $value;
    }

    /**
     * Sets the notificationToUserOnElevation property value. true if send notification to the end user when the role is activated. false if do not send notification when the role is activated.
     *  @param bool|null $value Value to set for the notificationToUserOnElevation property.
    */
    public function setNotificationToUserOnElevation(?bool $value ): void {
        $this->notificationToUserOnElevation = $value;
    }

    /**
     * Sets the ticketingInfoOnElevation property value. true if the ticketing information is required when activate the role. false if the ticketing information is not required when activate the role.
     *  @param bool|null $value Value to set for the ticketingInfoOnElevation property.
    */
    public function setTicketingInfoOnElevation(?bool $value ): void {
        $this->ticketingInfoOnElevation = $value;
    }

}
