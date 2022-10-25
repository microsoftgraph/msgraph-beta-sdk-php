<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftStoreForBusinessApp extends MobileApp implements Parsable 
{
    /**
     * @var array<MobileContainedApp>|null $containedApps The collection of contained apps in a mobileApp acting as a package.
    */
    private ?array $containedApps = null;
    
    /**
     * @var MicrosoftStoreForBusinessLicenseType|null $licenseType The licenseType property
    */
    private ?MicrosoftStoreForBusinessLicenseType $licenseType = null;
    
    /**
     * @var VppLicensingType|null $licensingType The supported License Type.
    */
    private ?VppLicensingType $licensingType = null;
    
    /**
     * @var string|null $packageIdentityName The app package identifier
    */
    private ?string $packageIdentityName = null;
    
    /**
     * @var string|null $productKey The app product key
    */
    private ?string $productKey = null;
    
    /**
     * @var int|null $totalLicenseCount The total number of Microsoft Store for Business licenses.
    */
    private ?int $totalLicenseCount = null;
    
    /**
     * @var int|null $usedLicenseCount The number of Microsoft Store for Business licenses in use.
    */
    private ?int $usedLicenseCount = null;
    
    /**
     * Instantiates a new MicrosoftStoreForBusinessApp and sets the default values.
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
        return $this->containedApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containedApps' => fn(ParseNode $n) => $o->setContainedApps($n->getCollectionOfObjectValues([MobileContainedApp::class, 'createFromDiscriminatorValue'])),
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(MicrosoftStoreForBusinessLicenseType::class)),
            'licensingType' => fn(ParseNode $n) => $o->setLicensingType($n->getObjectValue([VppLicensingType::class, 'createFromDiscriminatorValue'])),
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
        return $this->licenseType;
    }

    /**
     * Gets the licensingType property value. The supported License Type.
     * @return VppLicensingType|null
    */
    public function getLicensingType(): ?VppLicensingType {
        return $this->licensingType;
    }

    /**
     * Gets the packageIdentityName property value. The app package identifier
     * @return string|null
    */
    public function getPackageIdentityName(): ?string {
        return $this->packageIdentityName;
    }

    /**
     * Gets the productKey property value. The app product key
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->productKey;
    }

    /**
     * Gets the totalLicenseCount property value. The total number of Microsoft Store for Business licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->totalLicenseCount;
    }

    /**
     * Gets the usedLicenseCount property value. The number of Microsoft Store for Business licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        return $this->usedLicenseCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containedApps', $this->containedApps);
        $writer->writeEnumValue('licenseType', $this->licenseType);
        $writer->writeObjectValue('licensingType', $this->licensingType);
        $writer->writeStringValue('packageIdentityName', $this->packageIdentityName);
        $writer->writeStringValue('productKey', $this->productKey);
        $writer->writeIntegerValue('totalLicenseCount', $this->totalLicenseCount);
        $writer->writeIntegerValue('usedLicenseCount', $this->usedLicenseCount);
    }

    /**
     * Sets the containedApps property value. The collection of contained apps in a mobileApp acting as a package.
     *  @param array<MobileContainedApp>|null $value Value to set for the containedApps property.
    */
    public function setContainedApps(?array $value ): void {
        $this->containedApps = $value;
    }

    /**
     * Sets the licenseType property value. The licenseType property
     *  @param MicrosoftStoreForBusinessLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?MicrosoftStoreForBusinessLicenseType $value ): void {
        $this->licenseType = $value;
    }

    /**
     * Sets the licensingType property value. The supported License Type.
     *  @param VppLicensingType|null $value Value to set for the licensingType property.
    */
    public function setLicensingType(?VppLicensingType $value ): void {
        $this->licensingType = $value;
    }

    /**
     * Sets the packageIdentityName property value. The app package identifier
     *  @param string|null $value Value to set for the packageIdentityName property.
    */
    public function setPackageIdentityName(?string $value ): void {
        $this->packageIdentityName = $value;
    }

    /**
     * Sets the productKey property value. The app product key
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value ): void {
        $this->productKey = $value;
    }

    /**
     * Sets the totalLicenseCount property value. The total number of Microsoft Store for Business licenses.
     *  @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value ): void {
        $this->totalLicenseCount = $value;
    }

    /**
     * Sets the usedLicenseCount property value. The number of Microsoft Store for Business licenses in use.
     *  @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value ): void {
        $this->usedLicenseCount = $value;
    }

}
