<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Updates for different Windows' versions are usually released on the Patch Tuesday or B-week  of each month. This complex type defines the Build-version and the release-date for a particular B-week update of the Windows' version.
*/
class ManagedDeviceWindowsOperatingSystemUpdate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ManagedDeviceWindowsOperatingSystemUpdate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceWindowsOperatingSystemUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceWindowsOperatingSystemUpdate {
        return new ManagedDeviceWindowsOperatingSystemUpdate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the buildVersion property value. Indicates the build version for associated windows update. Windows Operating System updates are usually released on the Patch Tuesday or B-week of each month. Read-only.
     * @return string|null
    */
    public function getBuildVersion(): ?string {
        $val = $this->getBackingStore()->get('buildVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buildVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buildVersion' => fn(ParseNode $n) => $o->setBuildVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'releaseMonth' => fn(ParseNode $n) => $o->setReleaseMonth($n->getIntegerValue()),
            'releaseYear' => fn(ParseNode $n) => $o->setReleaseYear($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the releaseMonth property value. Indicates the Month in which this B-week update was released. Read-only.
     * @return int|null
    */
    public function getReleaseMonth(): ?int {
        $val = $this->getBackingStore()->get('releaseMonth');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseMonth'");
    }

    /**
     * Gets the releaseYear property value. Indicates the Year in which this B-week update was released. Read-only.
     * @return int|null
    */
    public function getReleaseYear(): ?int {
        $val = $this->getBackingStore()->get('releaseYear');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseYear'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('buildVersion', $this->getBuildVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('releaseMonth', $this->getReleaseMonth());
        $writer->writeIntegerValue('releaseYear', $this->getReleaseYear());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the buildVersion property value. Indicates the build version for associated windows update. Windows Operating System updates are usually released on the Patch Tuesday or B-week of each month. Read-only.
     * @param string|null $value Value to set for the buildVersion property.
    */
    public function setBuildVersion(?string $value): void {
        $this->getBackingStore()->set('buildVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the releaseMonth property value. Indicates the Month in which this B-week update was released. Read-only.
     * @param int|null $value Value to set for the releaseMonth property.
    */
    public function setReleaseMonth(?int $value): void {
        $this->getBackingStore()->set('releaseMonth', $value);
    }

    /**
     * Sets the releaseYear property value. Indicates the Year in which this B-week update was released. Read-only.
     * @param int|null $value Value to set for the releaseYear property.
    */
    public function setReleaseYear(?int $value): void {
        $this->getBackingStore()->set('releaseYear', $value);
    }

}
