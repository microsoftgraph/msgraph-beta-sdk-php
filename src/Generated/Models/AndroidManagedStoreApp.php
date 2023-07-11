<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties and inherited properties for Android Managed Store Apps.
*/
class AndroidManagedStoreApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new androidManagedStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedStoreApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedStoreWebApp': return new AndroidManagedStoreWebApp();
            }
        }
        return new AndroidManagedStoreApp();
    }

    /**
     * Gets the appIdentifier property value. The Identity Name.
     * @return string|null
    */
    public function getAppIdentifier(): ?string {
        $val = $this->getBackingStore()->get('appIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appIdentifier'");
    }

    /**
     * Gets the appStoreUrl property value. The Play for Work Store app URL.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        $val = $this->getBackingStore()->get('appStoreUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreUrl'");
    }

    /**
     * Gets the appTracks property value. The tracks that are visible to this enterprise.
     * @return array<AndroidManagedStoreAppTrack>|null
    */
    public function getAppTracks(): ?array {
        $val = $this->getBackingStore()->get('appTracks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidManagedStoreAppTrack::class);
            /** @var array<AndroidManagedStoreAppTrack>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appTracks'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIdentifier' => fn(ParseNode $n) => $o->setAppIdentifier($n->getStringValue()),
            'appStoreUrl' => fn(ParseNode $n) => $o->setAppStoreUrl($n->getStringValue()),
            'appTracks' => fn(ParseNode $n) => $o->setAppTracks($n->getCollectionOfObjectValues([AndroidManagedStoreAppTrack::class, 'createFromDiscriminatorValue'])),
            'isPrivate' => fn(ParseNode $n) => $o->setIsPrivate($n->getBooleanValue()),
            'isSystemApp' => fn(ParseNode $n) => $o->setIsSystemApp($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'supportsOemConfig' => fn(ParseNode $n) => $o->setSupportsOemConfig($n->getBooleanValue()),
            'totalLicenseCount' => fn(ParseNode $n) => $o->setTotalLicenseCount($n->getIntegerValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isPrivate property value. Indicates whether the app is only available to a given enterprise's users.
     * @return bool|null
    */
    public function getIsPrivate(): ?bool {
        $val = $this->getBackingStore()->get('isPrivate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPrivate'");
    }

    /**
     * Gets the isSystemApp property value. Indicates whether the app is a preinstalled system app.
     * @return bool|null
    */
    public function getIsSystemApp(): ?bool {
        $val = $this->getBackingStore()->get('isSystemApp');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSystemApp'");
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
     * Gets the packageId property value. The package identifier.
     * @return string|null
    */
    public function getPackageId(): ?string {
        $val = $this->getBackingStore()->get('packageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageId'");
    }

    /**
     * Gets the supportsOemConfig property value. Whether this app supports OEMConfig policy.
     * @return bool|null
    */
    public function getSupportsOemConfig(): ?bool {
        $val = $this->getBackingStore()->get('supportsOemConfig');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportsOemConfig'");
    }

    /**
     * Gets the totalLicenseCount property value. The total number of VPP licenses.
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
     * Gets the usedLicenseCount property value. The number of VPP licenses in use.
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
        $writer->writeStringValue('appIdentifier', $this->getAppIdentifier());
        $writer->writeStringValue('appStoreUrl', $this->getAppStoreUrl());
        $writer->writeCollectionOfObjectValues('appTracks', $this->getAppTracks());
        $writer->writeBooleanValue('isPrivate', $this->getIsPrivate());
        $writer->writeBooleanValue('isSystemApp', $this->getIsSystemApp());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeBooleanValue('supportsOemConfig', $this->getSupportsOemConfig());
        $writer->writeIntegerValue('totalLicenseCount', $this->getTotalLicenseCount());
        $writer->writeIntegerValue('usedLicenseCount', $this->getUsedLicenseCount());
    }

    /**
     * Sets the appIdentifier property value. The Identity Name.
     * @param string|null $value Value to set for the appIdentifier property.
    */
    public function setAppIdentifier(?string $value): void {
        $this->getBackingStore()->set('appIdentifier', $value);
    }

    /**
     * Sets the appStoreUrl property value. The Play for Work Store app URL.
     * @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('appStoreUrl', $value);
    }

    /**
     * Sets the appTracks property value. The tracks that are visible to this enterprise.
     * @param array<AndroidManagedStoreAppTrack>|null $value Value to set for the appTracks property.
    */
    public function setAppTracks(?array $value): void {
        $this->getBackingStore()->set('appTracks', $value);
    }

    /**
     * Sets the isPrivate property value. Indicates whether the app is only available to a given enterprise's users.
     * @param bool|null $value Value to set for the isPrivate property.
    */
    public function setIsPrivate(?bool $value): void {
        $this->getBackingStore()->set('isPrivate', $value);
    }

    /**
     * Sets the isSystemApp property value. Indicates whether the app is a preinstalled system app.
     * @param bool|null $value Value to set for the isSystemApp property.
    */
    public function setIsSystemApp(?bool $value): void {
        $this->getBackingStore()->set('isSystemApp', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the packageId property value. The package identifier.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

    /**
     * Sets the supportsOemConfig property value. Whether this app supports OEMConfig policy.
     * @param bool|null $value Value to set for the supportsOemConfig property.
    */
    public function setSupportsOemConfig(?bool $value): void {
        $this->getBackingStore()->set('supportsOemConfig', $value);
    }

    /**
     * Sets the totalLicenseCount property value. The total number of VPP licenses.
     * @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('totalLicenseCount', $value);
    }

    /**
     * Sets the usedLicenseCount property value. The number of VPP licenses in use.
     * @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value): void {
        $this->getBackingStore()->set('usedLicenseCount', $value);
    }

}
