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
 * Represents the build version details of a product revision that is associated with a quality update.
*/
class WindowsQualityUpdateProductBuildVersionDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsQualityUpdateProductBuildVersionDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsQualityUpdateProductBuildVersionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsQualityUpdateProductBuildVersionDetail {
        return new WindowsQualityUpdateProductBuildVersionDetail();
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
     * Gets the buildNumber property value. The build number of the product release, Allowed range is 0 - 2,147,483,647. For example: 19045. Read-only.
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
            'majorVersionNumber' => fn(ParseNode $n) => $o->setMajorVersionNumber($n->getIntegerValue()),
            'minorVersionNumber' => fn(ParseNode $n) => $o->setMinorVersionNumber($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'updateBuildRevision' => fn(ParseNode $n) => $o->setUpdateBuildRevision($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the majorVersionNumber property value. The major version of the product release, Allowed range is 0 - 2,147,483,647. For example: 10. Read-only.
     * @return int|null
    */
    public function getMajorVersionNumber(): ?int {
        $val = $this->getBackingStore()->get('majorVersionNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'majorVersionNumber'");
    }

    /**
     * Gets the minorVersionNumber property value. The minor version of the product release, Allowed range is 0 - 2,147,483,647. For example: 0. Read-only.
     * @return int|null
    */
    public function getMinorVersionNumber(): ?int {
        $val = $this->getBackingStore()->get('minorVersionNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minorVersionNumber'");
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
     * Gets the updateBuildRevision property value. The update build revision number of the product revision for the corresponding patch, Allowed range is 0 - 2,147,483,647. For example: 4780. Read-only.
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
        $writer->writeIntegerValue('majorVersionNumber', $this->getMajorVersionNumber());
        $writer->writeIntegerValue('minorVersionNumber', $this->getMinorVersionNumber());
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
     * Sets the buildNumber property value. The build number of the product release, Allowed range is 0 - 2,147,483,647. For example: 19045. Read-only.
     * @param int|null $value Value to set for the buildNumber property.
    */
    public function setBuildNumber(?int $value): void {
        $this->getBackingStore()->set('buildNumber', $value);
    }

    /**
     * Sets the majorVersionNumber property value. The major version of the product release, Allowed range is 0 - 2,147,483,647. For example: 10. Read-only.
     * @param int|null $value Value to set for the majorVersionNumber property.
    */
    public function setMajorVersionNumber(?int $value): void {
        $this->getBackingStore()->set('majorVersionNumber', $value);
    }

    /**
     * Sets the minorVersionNumber property value. The minor version of the product release, Allowed range is 0 - 2,147,483,647. For example: 0. Read-only.
     * @param int|null $value Value to set for the minorVersionNumber property.
    */
    public function setMinorVersionNumber(?int $value): void {
        $this->getBackingStore()->set('minorVersionNumber', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the updateBuildRevision property value. The update build revision number of the product revision for the corresponding patch, Allowed range is 0 - 2,147,483,647. For example: 4780. Read-only.
     * @param int|null $value Value to set for the updateBuildRevision property.
    */
    public function setUpdateBuildRevision(?int $value): void {
        $this->getBackingStore()->set('updateBuildRevision', $value);
    }

}
