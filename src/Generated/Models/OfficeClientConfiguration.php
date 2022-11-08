<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OfficeClientConfiguration extends Entity implements Parsable 
{
    /**
     * @var array<OfficeClientConfigurationAssignment>|null $assignments The list of group assignments for the policy.
    */
    private ?array $assignments = null;
    
    /**
     * @var array<OfficeClientCheckinStatus>|null $checkinStatuses List of office Client check-in status.
    */
    private ?array $checkinStatuses = null;
    
    /**
     * @var string|null $description Not yet documented
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Admin provided description of the office client configuration policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var StreamInterface|null $policyPayload Policy settings JSON string in binary format, these values cannot be changed by the user.
    */
    private ?StreamInterface $policyPayload = null;
    
    /**
     * @var int|null $priority Priority value should be unique value for each policy under a tenant and will be used for conflict resolution, lower values mean priority is high.
    */
    private ?int $priority = null;
    
    /**
     * @var OfficeUserCheckinSummary|null $userCheckinSummary User check-in summary for the policy.
    */
    private ?OfficeUserCheckinSummary $userCheckinSummary = null;
    
    /**
     * @var StreamInterface|null $userPreferencePayload Preference settings JSON string in binary format, these values can be overridden by the user.
    */
    private ?StreamInterface $userPreferencePayload = null;
    
    /**
     * Instantiates a new officeClientConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.officeClientConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeClientConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeClientConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsOfficeClientConfiguration': return new WindowsOfficeClientConfiguration();
                case '#microsoft.graph.windowsOfficeClientSecurityConfiguration': return new WindowsOfficeClientSecurityConfiguration();
            }
        }
        return new OfficeClientConfiguration();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the policy.
     * @return array<OfficeClientConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the checkinStatuses property value. List of office Client check-in status.
     * @return array<OfficeClientCheckinStatus>|null
    */
    public function getCheckinStatuses(): ?array {
        return $this->checkinStatuses;
    }

    /**
     * Gets the description property value. Not yet documented
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Admin provided description of the office client configuration policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([OfficeClientConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'checkinStatuses' => fn(ParseNode $n) => $o->setCheckinStatuses($n->getCollectionOfObjectValues([OfficeClientCheckinStatus::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'policyPayload' => fn(ParseNode $n) => $o->setPolicyPayload($n->getBinaryContent()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'userCheckinSummary' => fn(ParseNode $n) => $o->setUserCheckinSummary($n->getObjectValue([OfficeUserCheckinSummary::class, 'createFromDiscriminatorValue'])),
            'userPreferencePayload' => fn(ParseNode $n) => $o->setUserPreferencePayload($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the policyPayload property value. Policy settings JSON string in binary format, these values cannot be changed by the user.
     * @return StreamInterface
    */
    public function getPolicyPayload(): StreamInterface {
        return $this->policyPayload;
    }

    /**
     * Gets the priority property value. Priority value should be unique value for each policy under a tenant and will be used for conflict resolution, lower values mean priority is high.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the userCheckinSummary property value. User check-in summary for the policy.
     * @return OfficeUserCheckinSummary|null
    */
    public function getUserCheckinSummary(): ?OfficeUserCheckinSummary {
        return $this->userCheckinSummary;
    }

    /**
     * Gets the userPreferencePayload property value. Preference settings JSON string in binary format, these values can be overridden by the user.
     * @return StreamInterface
    */
    public function getUserPreferencePayload(): StreamInterface {
        return $this->userPreferencePayload;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('checkinStatuses', $this->checkinStatuses);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBinaryContent('policyPayload', $this->policyPayload);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeObjectValue('userCheckinSummary', $this->userCheckinSummary);
        $writer->writeBinaryContent('userPreferencePayload', $this->userPreferencePayload);
    }

    /**
     * Sets the assignments property value. The list of group assignments for the policy.
     *  @param array<OfficeClientConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the checkinStatuses property value. List of office Client check-in status.
     *  @param array<OfficeClientCheckinStatus>|null $value Value to set for the checkinStatuses property.
    */
    public function setCheckinStatuses(?array $value ): void {
        $this->checkinStatuses = $value;
    }

    /**
     * Sets the description property value. Not yet documented
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Admin provided description of the office client configuration policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the policyPayload property value. Policy settings JSON string in binary format, these values cannot be changed by the user.
     *  @param StreamInterface|null $value Value to set for the policyPayload property.
    */
    public function setPolicyPayload(?StreamInterface $value ): void {
        $this->policyPayload = $value;
    }

    /**
     * Sets the priority property value. Priority value should be unique value for each policy under a tenant and will be used for conflict resolution, lower values mean priority is high.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the userCheckinSummary property value. User check-in summary for the policy.
     *  @param OfficeUserCheckinSummary|null $value Value to set for the userCheckinSummary property.
    */
    public function setUserCheckinSummary(?OfficeUserCheckinSummary $value ): void {
        $this->userCheckinSummary = $value;
    }

    /**
     * Sets the userPreferencePayload property value. Preference settings JSON string in binary format, these values can be overridden by the user.
     *  @param StreamInterface|null $value Value to set for the userPreferencePayload property.
    */
    public function setUserPreferencePayload(?StreamInterface $value ): void {
        $this->userPreferencePayload = $value;
    }

}
