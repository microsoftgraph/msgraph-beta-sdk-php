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
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'geographicLocationType' => fn(ParseNode $n) => $o->setGeographicLocationType($n->getEnumValue(CloudPcGeographicLocationType::class)),
            'regionGroup' => fn(ParseNode $n) => $o->setRegionGroup($n->getEnumValue(CloudPcRegionGroup::class)),
            'regionRestrictionDetail' => fn(ParseNode $n) => $o->setRegionRestrictionDetail($n->getObjectValue([CloudPcSupportedRegionRestrictionDetail::class, 'createFromDiscriminatorValue'])),
            'regionStatus' => fn(ParseNode $n) => $o->setRegionStatus($n->getEnumValue(CloudPcSupportedRegionStatus::class)),
            'supportedSolution' => fn(ParseNode $n) => $o->setSupportedSolution($n->getEnumValue(CloudPcManagementService::class)),
        ]);
    }

    /**
     * Gets the geographicLocationType property value. The geographic location where the region is located. The possible values are: default, asia, australasia, canada, europe, india, africa, usCentral, usEast, usWest, southAmerica, middleEast, centralAmerica, usGovernment, unknownFutureValue. Default value is default. Read-only.
     * @return CloudPcGeographicLocationType|null
    */
    public function getGeographicLocationType(): ?CloudPcGeographicLocationType {
        $val = $this->getBackingStore()->get('geographicLocationType');
        if (is_null($val) || $val instanceof CloudPcGeographicLocationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'geographicLocationType'");
    }

    /**
     * Gets the regionGroup property value. The regionGroup property
     * @return CloudPcRegionGroup|null
    */
    public function getRegionGroup(): ?CloudPcRegionGroup {
        $val = $this->getBackingStore()->get('regionGroup');
        if (is_null($val) || $val instanceof CloudPcRegionGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionGroup'");
    }

    /**
     * Gets the regionRestrictionDetail property value. When the region isn't available, all region restrictions are set to true. These restrictions apply to three properties: cPURestricted, gPURestricted, and nestedVirtualizationRestricted. cPURestricted indicates whether the region is available for CPU, gPURestricted indicates whether the region is available for GPU, and nestedVirtualizationRestricted indicates whether the region is available for nested virtualization. Read-only.
     * @return CloudPcSupportedRegionRestrictionDetail|null
    */
    public function getRegionRestrictionDetail(): ?CloudPcSupportedRegionRestrictionDetail {
        $val = $this->getBackingStore()->get('regionRestrictionDetail');
        if (is_null($val) || $val instanceof CloudPcSupportedRegionRestrictionDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionRestrictionDetail'");
    }

    /**
     * Gets the regionStatus property value. The status of the supported region. The possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
     * @return CloudPcSupportedRegionStatus|null
    */
    public function getRegionStatus(): ?CloudPcSupportedRegionStatus {
        $val = $this->getBackingStore()->get('regionStatus');
        if (is_null($val) || $val instanceof CloudPcSupportedRegionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionStatus'");
    }

    /**
     * Gets the supportedSolution property value. The supportedSolution property
     * @return CloudPcManagementService|null
    */
    public function getSupportedSolution(): ?CloudPcManagementService {
        $val = $this->getBackingStore()->get('supportedSolution');
        if (is_null($val) || $val instanceof CloudPcManagementService) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedSolution'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('geographicLocationType', $this->getGeographicLocationType());
        $writer->writeEnumValue('regionGroup', $this->getRegionGroup());
        $writer->writeObjectValue('regionRestrictionDetail', $this->getRegionRestrictionDetail());
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
     * Sets the geographicLocationType property value. The geographic location where the region is located. The possible values are: default, asia, australasia, canada, europe, india, africa, usCentral, usEast, usWest, southAmerica, middleEast, centralAmerica, usGovernment, unknownFutureValue. Default value is default. Read-only.
     * @param CloudPcGeographicLocationType|null $value Value to set for the geographicLocationType property.
    */
    public function setGeographicLocationType(?CloudPcGeographicLocationType $value): void {
        $this->getBackingStore()->set('geographicLocationType', $value);
    }

    /**
     * Sets the regionGroup property value. The regionGroup property
     * @param CloudPcRegionGroup|null $value Value to set for the regionGroup property.
    */
    public function setRegionGroup(?CloudPcRegionGroup $value): void {
        $this->getBackingStore()->set('regionGroup', $value);
    }

    /**
     * Sets the regionRestrictionDetail property value. When the region isn't available, all region restrictions are set to true. These restrictions apply to three properties: cPURestricted, gPURestricted, and nestedVirtualizationRestricted. cPURestricted indicates whether the region is available for CPU, gPURestricted indicates whether the region is available for GPU, and nestedVirtualizationRestricted indicates whether the region is available for nested virtualization. Read-only.
     * @param CloudPcSupportedRegionRestrictionDetail|null $value Value to set for the regionRestrictionDetail property.
    */
    public function setRegionRestrictionDetail(?CloudPcSupportedRegionRestrictionDetail $value): void {
        $this->getBackingStore()->set('regionRestrictionDetail', $value);
    }

    /**
     * Sets the regionStatus property value. The status of the supported region. The possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
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
