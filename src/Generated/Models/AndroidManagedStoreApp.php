<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedStoreApp extends MobileApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appIdentifier The Identity Name.
    */
    private ?string $appIdentifier = null;
    
    /**
     * @var string|null $appStoreUrl The Play for Work Store app URL.
    */
    private ?string $appStoreUrl = null;
    
    /**
     * @var array<AndroidManagedStoreAppTrack>|null $appTracks The tracks that are visible to this enterprise.
    */
    private ?array $appTracks = null;
    
    /**
     * @var bool|null $isPrivate Indicates whether the app is only available to a given enterprise's users.
    */
    private ?bool $isPrivate = null;
    
    /**
     * @var bool|null $isSystemApp Indicates whether the app is a preinstalled system app.
    */
    private ?bool $isSystemApp = null;
    
    /**
     * @var string|null $packageId The package identifier.
    */
    private ?string $packageId = null;
    
    /**
     * @var bool|null $supportsOemConfig Whether this app supports OEMConfig policy.
    */
    private ?bool $supportsOemConfig = null;
    
    /**
     * @var int|null $totalLicenseCount The total number of VPP licenses.
    */
    private ?int $totalLicenseCount = null;
    
    /**
     * @var int|null $usedLicenseCount The number of VPP licenses in use.
    */
    private ?int $usedLicenseCount = null;
    
    /**
     * Instantiates a new AndroidManagedStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appIdentifier property value. The Identity Name.
     * @return string|null
    */
    public function getAppIdentifier(): ?string {
        return $this->appIdentifier;
    }

    /**
     * Gets the appStoreUrl property value. The Play for Work Store app URL.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->appStoreUrl;
    }

    /**
     * Gets the appTracks property value. The tracks that are visible to this enterprise.
     * @return array<AndroidManagedStoreAppTrack>|null
    */
    public function getAppTracks(): ?array {
        return $this->appTracks;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIdentifier' => function (ParseNode $n) use ($o) { $o->setAppIdentifier($n->getStringValue()); },
            'appStoreUrl' => function (ParseNode $n) use ($o) { $o->setAppStoreUrl($n->getStringValue()); },
            'appTracks' => function (ParseNode $n) use ($o) { $o->setAppTracks($n->getCollectionOfObjectValues(array(AndroidManagedStoreAppTrack::class, 'createFromDiscriminatorValue'))); },
            'isPrivate' => function (ParseNode $n) use ($o) { $o->setIsPrivate($n->getBooleanValue()); },
            'isSystemApp' => function (ParseNode $n) use ($o) { $o->setIsSystemApp($n->getBooleanValue()); },
            'packageId' => function (ParseNode $n) use ($o) { $o->setPackageId($n->getStringValue()); },
            'supportsOemConfig' => function (ParseNode $n) use ($o) { $o->setSupportsOemConfig($n->getBooleanValue()); },
            'totalLicenseCount' => function (ParseNode $n) use ($o) { $o->setTotalLicenseCount($n->getIntegerValue()); },
            'usedLicenseCount' => function (ParseNode $n) use ($o) { $o->setUsedLicenseCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the isPrivate property value. Indicates whether the app is only available to a given enterprise's users.
     * @return bool|null
    */
    public function getIsPrivate(): ?bool {
        return $this->isPrivate;
    }

    /**
     * Gets the isSystemApp property value. Indicates whether the app is a preinstalled system app.
     * @return bool|null
    */
    public function getIsSystemApp(): ?bool {
        return $this->isSystemApp;
    }

    /**
     * Gets the packageId property value. The package identifier.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the supportsOemConfig property value. Whether this app supports OEMConfig policy.
     * @return bool|null
    */
    public function getSupportsOemConfig(): ?bool {
        return $this->supportsOemConfig;
    }

    /**
     * Gets the totalLicenseCount property value. The total number of VPP licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->totalLicenseCount;
    }

    /**
     * Gets the usedLicenseCount property value. The number of VPP licenses in use.
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
        $writer->writeStringValue('appIdentifier', $this->appIdentifier);
        $writer->writeStringValue('appStoreUrl', $this->appStoreUrl);
        $writer->writeCollectionOfObjectValues('appTracks', $this->appTracks);
        $writer->writeBooleanValue('isPrivate', $this->isPrivate);
        $writer->writeBooleanValue('isSystemApp', $this->isSystemApp);
        $writer->writeStringValue('packageId', $this->packageId);
        $writer->writeBooleanValue('supportsOemConfig', $this->supportsOemConfig);
        $writer->writeIntegerValue('totalLicenseCount', $this->totalLicenseCount);
        $writer->writeIntegerValue('usedLicenseCount', $this->usedLicenseCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the appIdentifier property value. The Identity Name.
     *  @param string|null $value Value to set for the appIdentifier property.
    */
    public function setAppIdentifier(?string $value ): void {
        $this->appIdentifier = $value;
    }

    /**
     * Sets the appStoreUrl property value. The Play for Work Store app URL.
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

    /**
     * Sets the appTracks property value. The tracks that are visible to this enterprise.
     *  @param array<AndroidManagedStoreAppTrack>|null $value Value to set for the appTracks property.
    */
    public function setAppTracks(?array $value ): void {
        $this->appTracks = $value;
    }

    /**
     * Sets the isPrivate property value. Indicates whether the app is only available to a given enterprise's users.
     *  @param bool|null $value Value to set for the isPrivate property.
    */
    public function setIsPrivate(?bool $value ): void {
        $this->isPrivate = $value;
    }

    /**
     * Sets the isSystemApp property value. Indicates whether the app is a preinstalled system app.
     *  @param bool|null $value Value to set for the isSystemApp property.
    */
    public function setIsSystemApp(?bool $value ): void {
        $this->isSystemApp = $value;
    }

    /**
     * Sets the packageId property value. The package identifier.
     *  @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value ): void {
        $this->packageId = $value;
    }

    /**
     * Sets the supportsOemConfig property value. Whether this app supports OEMConfig policy.
     *  @param bool|null $value Value to set for the supportsOemConfig property.
    */
    public function setSupportsOemConfig(?bool $value ): void {
        $this->supportsOemConfig = $value;
    }

    /**
     * Sets the totalLicenseCount property value. The total number of VPP licenses.
     *  @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value ): void {
        $this->totalLicenseCount = $value;
    }

    /**
     * Sets the usedLicenseCount property value. The number of VPP licenses in use.
     *  @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value ): void {
        $this->usedLicenseCount = $value;
    }

}
