<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BuildVersionDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new buildVersionDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BuildVersionDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BuildVersionDetails {
        return new BuildVersionDetails();
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
     * Gets the buildNumber property value. The build number of the product release. Read-only.
     * @return int|null
    */
    public function getBuildNumber(): ?int {
        $val = $this->getBackingStore()->get('buildNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buildNumber'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buildNumber' => fn(ParseNode $n) => $o->setBuildNumber($n->getIntegerValue()),
            'majorVersion' => fn(ParseNode $n) => $o->setMajorVersion($n->getIntegerValue()),
            'minorVersion' => fn(ParseNode $n) => $o->setMinorVersion($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'updateBuildRevision' => fn(ParseNode $n) => $o->setUpdateBuildRevision($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the majorVersion property value. The major version of the product release. Read-only.
     * @return int|null
    */
    public function getMajorVersion(): ?int {
        $val = $this->getBackingStore()->get('majorVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'majorVersion'");
    }

    /**
     * Gets the minorVersion property value. The minor version of the product release. Read-only.
     * @return int|null
    */
    public function getMinorVersion(): ?int {
        $val = $this->getBackingStore()->get('minorVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minorVersion'");
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
     * Gets the updateBuildRevision property value. The update build revision number of the product revision. Read-only.
     * @return int|null
    */
    public function getUpdateBuildRevision(): ?int {
        $val = $this->getBackingStore()->get('updateBuildRevision');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateBuildRevision'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('buildNumber', $this->getBuildNumber());
        $writer->writeIntegerValue('majorVersion', $this->getMajorVersion());
        $writer->writeIntegerValue('minorVersion', $this->getMinorVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('updateBuildRevision', $this->getUpdateBuildRevision());
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
     * Sets the buildNumber property value. The build number of the product release. Read-only.
     * @param int|null $value Value to set for the buildNumber property.
    */
    public function setBuildNumber(?int $value): void {
        $this->getBackingStore()->set('buildNumber', $value);
    }

    /**
     * Sets the majorVersion property value. The major version of the product release. Read-only.
     * @param int|null $value Value to set for the majorVersion property.
    */
    public function setMajorVersion(?int $value): void {
        $this->getBackingStore()->set('majorVersion', $value);
    }

    /**
     * Sets the minorVersion property value. The minor version of the product release. Read-only.
     * @param int|null $value Value to set for the minorVersion property.
    */
    public function setMinorVersion(?int $value): void {
        $this->getBackingStore()->set('minorVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the updateBuildRevision property value. The update build revision number of the product revision. Read-only.
     * @param int|null $value Value to set for the updateBuildRevision property.
    */
    public function setUpdateBuildRevision(?int $value): void {
        $this->getBackingStore()->set('updateBuildRevision', $value);
    }

}
