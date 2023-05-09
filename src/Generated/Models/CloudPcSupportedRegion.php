<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSupportedRegion extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcSupportedRegion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSupportedRegion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSupportedRegion {
        return new CloudPcSupportedRegion();
    }

    /**
     * Gets the displayName property value. The name for the supported region. Read-only.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'regionGroup' => fn(ParseNode $n) => $o->setRegionGroup($n->getEnumValue(CloudPcRegionGroup::class)),
            'regionStatus' => fn(ParseNode $n) => $o->setRegionStatus($n->getEnumValue(CloudPcSupportedRegionStatus::class)),
            'supportedSolution' => fn(ParseNode $n) => $o->setSupportedSolution($n->getEnumValue(CloudPcManagementService::class)),
        ]);
    }

    /**
     * Gets the regionGroup property value. The regionGroup property
     * @return CloudPcRegionGroup|null
    */
    public function getRegionGroup(): ?CloudPcRegionGroup {
        return $this->getBackingStore()->get('regionGroup');
    }

    /**
     * Gets the regionStatus property value. The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
     * @return CloudPcSupportedRegionStatus|null
    */
    public function getRegionStatus(): ?CloudPcSupportedRegionStatus {
        return $this->getBackingStore()->get('regionStatus');
    }

    /**
     * Gets the supportedSolution property value. The supportedSolution property
     * @return CloudPcManagementService|null
    */
    public function getSupportedSolution(): ?CloudPcManagementService {
        return $this->getBackingStore()->get('supportedSolution');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('regionGroup', $this->getRegionGroup());
        $writer->writeEnumValue('regionStatus', $this->getRegionStatus());
        $writer->writeEnumValue('supportedSolution', $this->getSupportedSolution());
    }

    /**
     * Sets the displayName property value. The name for the supported region. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the regionGroup property value. The regionGroup property
     * @param CloudPcRegionGroup|null $value Value to set for the regionGroup property.
    */
    public function setRegionGroup(?CloudPcRegionGroup $value): void {
        $this->getBackingStore()->set('regionGroup', $value);
    }

    /**
     * Sets the regionStatus property value. The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
     * @param CloudPcSupportedRegionStatus|null $value Value to set for the regionStatus property.
    */
    public function setRegionStatus(?CloudPcSupportedRegionStatus $value): void {
        $this->getBackingStore()->set('regionStatus', $value);
    }

    /**
     * Sets the supportedSolution property value. The supportedSolution property
     * @param CloudPcManagementService|null $value Value to set for the supportedSolution property.
    */
    public function setSupportedSolution(?CloudPcManagementService $value): void {
        $this->getBackingStore()->set('supportedSolution', $value);
    }

}
