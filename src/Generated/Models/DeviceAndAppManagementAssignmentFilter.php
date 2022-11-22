<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAndAppManagementAssignmentFilter extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceAndAppManagementAssignmentFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementAssignmentFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementAssignmentFilter {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.payloadCompatibleAssignmentFilter': return new PayloadCompatibleAssignmentFilter();
            }
        }
        return new DeviceAndAppManagementAssignmentFilter();
    }

    /**
     * Gets the createdDateTime property value. Creation time of the Assignment Filter.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description of the Assignment Filter.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. DisplayName of the Assignment Filter.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'payloads' => fn(ParseNode $n) => $o->setPayloads($n->getCollectionOfObjectValues([PayloadByFilter::class, 'createFromDiscriminatorValue'])),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(DevicePlatformType::class)),
            'roleScopeTags' => fn(ParseNode $n) => $o->setRoleScopeTags($n->getCollectionOfPrimitiveValues()),
            'rule' => fn(ParseNode $n) => $o->setRule($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the Assignment Filter.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the payloads property value. Associated assignments for a specific filter
     * @return array<PayloadByFilter>|null
    */
    public function getPayloads(): ?array {
        return $this->getBackingStore()->get('payloads');
    }

    /**
     * Gets the platform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->getBackingStore()->get('platform');
    }

    /**
     * Gets the roleScopeTags property value. RoleScopeTags of the Assignment Filter.
     * @return array<string>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->getBackingStore()->get('roleScopeTags');
    }

    /**
     * Gets the rule property value. Rule definition of the Assignment Filter.
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->getBackingStore()->get('rule');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('payloads', $this->getPayloads());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTags', $this->getRoleScopeTags());
        $writer->writeStringValue('rule', $this->getRule());
    }

    /**
     * Sets the createdDateTime property value. Creation time of the Assignment Filter.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the Assignment Filter.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. DisplayName of the Assignment Filter.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the Assignment Filter.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the payloads property value. Associated assignments for a specific filter
     *  @param array<PayloadByFilter>|null $value Value to set for the payloads property.
    */
    public function setPayloads(?array $value): void {
        $this->getBackingStore()->set('payloads', $value);
    }

    /**
     * Sets the platform property value. Supported platform types.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the roleScopeTags property value. RoleScopeTags of the Assignment Filter.
     *  @param array<string>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('roleScopeTags', $value);
    }

    /**
     * Sets the rule property value. Rule definition of the Assignment Filter.
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value): void {
        $this->getBackingStore()->set('rule', $value);
    }

}
