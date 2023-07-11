<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Microsoft Store for Business Apps. This class does not support Create, Delete, or Update.
*/
class MicrosoftStoreForBusinessApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new microsoftStoreForBusinessApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftStoreForBusinessApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftStoreForBusinessApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftStoreForBusinessApp {
        return new MicrosoftStoreForBusinessApp();
    }

    /**
     * Gets the containedApps property value. The collection of contained apps in a mobileApp acting as a package.
     * @return array<MobileContainedApp>|null
    */
    public function getContainedApps(): ?array {
        $val = $this->getBackingStore()->get('containedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileContainedApp::class);
            /** @var array<MobileContainedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containedApps'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containedApps' => fn(ParseNode $n) => $o->setContainedApps($n->getCollectionOfObjectValues([MobileContainedApp::class, 'createFromDiscriminatorValue'])),
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(MicrosoftStoreForBusinessLicenseType::class)),
            'licensingType' => fn(ParseNode $n) => $o->setLicensingType($n->getObjectValue([VppLicensingType::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'packageIdentityName' => fn(ParseNode $n) => $o->setPackageIdentityName($n->getStringValue()),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'totalLicenseCount' => fn(ParseNode $n) => $o->setTotalLicenseCount($n->getIntegerValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the licenseType property value. The licenseType property
     * @return MicrosoftStoreForBusinessLicenseType|null
    */
    public function getLicenseType(): ?MicrosoftStoreForBusinessLicenseType {
        $val = $this->getBackingStore()->get('licenseType');
        if (is_null($val) || $val instanceof MicrosoftStoreForBusinessLicenseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseType'");
    }

    /**
     * Gets the licensingType property value. The supported License Type.
     * @return VppLicensingType|null
    */
    public function getLicensingType(): ?VppLicensingType {
        $val = $this->getBackingStore()->get('licensingType');
        if (is_null($val) || $val instanceof VppLicensingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licensingType'");
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
     * Gets the packageIdentityName property value. The app package identifier
     * @return string|null
    */
    public function getPackageIdentityName(): ?string {
        $val = $this->getBackingStore()->get('packageIdentityName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageIdentityName'");
    }

    /**
     * Gets the productKey property value. The app product key
     * @return string|null
    */
    public function getProductKey(): ?string {
        $val = $this->getBackingStore()->get('productKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productKey'");
    }

    /**
     * Gets the totalLicenseCount property value. The total number of Microsoft Store for Business licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('totalLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLicenseCount'");
    }

    /**
     * Gets the usedLicenseCount property value. The number of Microsoft Store for Business licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('usedLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usedLicenseCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containedApps', $this->getContainedApps());
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
        $writer->writeObjectValue('licensingType', $this->getLicensingType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('packageIdentityName', $this->getPackageIdentityName());
        $writer->writeStringValue('productKey', $this->getProductKey());
        $writer->writeIntegerValue('totalLicenseCount', $this->getTotalLicenseCount());
        $writer->writeIntegerValue('usedLicenseCount', $this->getUsedLicenseCount());
    }

    /**
     * Sets the containedApps property value. The collection of contained apps in a mobileApp acting as a package.
     * @param array<MobileContainedApp>|null $value Value to set for the containedApps property.
    */
    public function setContainedApps(?array $value): void {
        $this->getBackingStore()->set('containedApps', $value);
    }

    /**
     * Sets the licenseType property value. The licenseType property
     * @param MicrosoftStoreForBusinessLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?MicrosoftStoreForBusinessLicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

    /**
     * Sets the licensingType property value. The supported License Type.
     * @param VppLicensingType|null $value Value to set for the licensingType property.
    */
    public function setLicensingType(?VppLicensingType $value): void {
        $this->getBackingStore()->set('licensingType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the packageIdentityName property value. The app package identifier
     * @param string|null $value Value to set for the packageIdentityName property.
    */
    public function setPackageIdentityName(?string $value): void {
        $this->getBackingStore()->set('packageIdentityName', $value);
    }

    /**
     * Sets the productKey property value. The app product key
     * @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value): void {
        $this->getBackingStore()->set('productKey', $value);
    }

    /**
     * Sets the totalLicenseCount property value. The total number of Microsoft Store for Business licenses.
     * @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('totalLicenseCount', $value);
    }

    /**
     * Sets the usedLicenseCount property value. The number of Microsoft Store for Business licenses in use.
     * @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value): void {
        $this->getBackingStore()->set('usedLicenseCount', $value);
    }

}
