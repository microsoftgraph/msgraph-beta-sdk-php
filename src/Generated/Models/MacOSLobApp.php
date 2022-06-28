<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSLobApp extends MobileLobApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $buildNumber The build number of MacOS Line of Business (LoB) app.
    */
    private ?string $buildNumber = null;
    
    /**
     * @var string|null $bundleId The bundle id.
    */
    private ?string $bundleId = null;
    
    /**
     * @var array<MacOSLobChildApp>|null $childApps The app list in this bundle package
    */
    private ?array $childApps = null;
    
    /**
     * @var string|null $identityVersion The identity version.
    */
    private ?string $identityVersion = null;
    
    /**
     * @var bool|null $ignoreVersionDetection A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for macOS Line of Business (LoB) apps that use a self update feature.
    */
    private ?bool $ignoreVersionDetection = null;
    
    /**
     * @var bool|null $installAsManaged A boolean to control whether the app will be installed as managed (requires macOS 11.0 and other PKG restrictions).
    */
    private ?bool $installAsManaged = null;
    
    /**
     * @var array<string>|null $md5Hash The MD5 hash codes
    */
    private ?array $md5Hash = null;
    
    /**
     * @var int|null $md5HashChunkSize The chunk size for MD5 hash
    */
    private ?int $md5HashChunkSize = null;
    
    /**
     * @var MacOSMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?MacOSMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $versionNumber The version number of MacOS Line of Business (LoB) app.
    */
    private ?string $versionNumber = null;
    
    /**
     * Instantiates a new MacOSLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSLobApp {
        return new MacOSLobApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the buildNumber property value. The build number of MacOS Line of Business (LoB) app.
     * @return string|null
    */
    public function getBuildNumber(): ?string {
        return $this->buildNumber;
    }

    /**
     * Gets the bundleId property value. The bundle id.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * Gets the childApps property value. The app list in this bundle package
     * @return array<MacOSLobChildApp>|null
    */
    public function getChildApps(): ?array {
        return $this->childApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buildNumber' => function (ParseNode $n) use ($o) { $o->setBuildNumber($n->getStringValue()); },
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'childApps' => function (ParseNode $n) use ($o) { $o->setChildApps($n->getCollectionOfObjectValues(array(MacOSLobChildApp::class, 'createFromDiscriminatorValue'))); },
            'identityVersion' => function (ParseNode $n) use ($o) { $o->setIdentityVersion($n->getStringValue()); },
            'ignoreVersionDetection' => function (ParseNode $n) use ($o) { $o->setIgnoreVersionDetection($n->getBooleanValue()); },
            'installAsManaged' => function (ParseNode $n) use ($o) { $o->setInstallAsManaged($n->getBooleanValue()); },
            'md5Hash' => function (ParseNode $n) use ($o) { $o->setMd5Hash($n->getCollectionOfPrimitiveValues()); },
            'md5HashChunkSize' => function (ParseNode $n) use ($o) { $o->setMd5HashChunkSize($n->getIntegerValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(MacOSMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'versionNumber' => function (ParseNode $n) use ($o) { $o->setVersionNumber($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->identityVersion;
    }

    /**
     * Gets the ignoreVersionDetection property value. A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for macOS Line of Business (LoB) apps that use a self update feature.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        return $this->ignoreVersionDetection;
    }

    /**
     * Gets the installAsManaged property value. A boolean to control whether the app will be installed as managed (requires macOS 11.0 and other PKG restrictions).
     * @return bool|null
    */
    public function getInstallAsManaged(): ?bool {
        return $this->installAsManaged;
    }

    /**
     * Gets the md5Hash property value. The MD5 hash codes
     * @return array<string>|null
    */
    public function getMd5Hash(): ?array {
        return $this->md5Hash;
    }

    /**
     * Gets the md5HashChunkSize property value. The chunk size for MD5 hash
     * @return int|null
    */
    public function getMd5HashChunkSize(): ?int {
        return $this->md5HashChunkSize;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return MacOSMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?MacOSMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the versionNumber property value. The version number of MacOS Line of Business (LoB) app.
     * @return string|null
    */
    public function getVersionNumber(): ?string {
        return $this->versionNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('buildNumber', $this->buildNumber);
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeCollectionOfObjectValues('childApps', $this->childApps);
        $writer->writeStringValue('identityVersion', $this->identityVersion);
        $writer->writeBooleanValue('ignoreVersionDetection', $this->ignoreVersionDetection);
        $writer->writeBooleanValue('installAsManaged', $this->installAsManaged);
        $writer->writeCollectionOfPrimitiveValues('md5Hash', $this->md5Hash);
        $writer->writeIntegerValue('md5HashChunkSize', $this->md5HashChunkSize);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('versionNumber', $this->versionNumber);
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
     * Sets the buildNumber property value. The build number of MacOS Line of Business (LoB) app.
     *  @param string|null $value Value to set for the buildNumber property.
    */
    public function setBuildNumber(?string $value ): void {
        $this->buildNumber = $value;
    }

    /**
     * Sets the bundleId property value. The bundle id.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the childApps property value. The app list in this bundle package
     *  @param array<MacOSLobChildApp>|null $value Value to set for the childApps property.
    */
    public function setChildApps(?array $value ): void {
        $this->childApps = $value;
    }

    /**
     * Sets the identityVersion property value. The identity version.
     *  @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value ): void {
        $this->identityVersion = $value;
    }

    /**
     * Sets the ignoreVersionDetection property value. A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for macOS Line of Business (LoB) apps that use a self update feature.
     *  @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value ): void {
        $this->ignoreVersionDetection = $value;
    }

    /**
     * Sets the installAsManaged property value. A boolean to control whether the app will be installed as managed (requires macOS 11.0 and other PKG restrictions).
     *  @param bool|null $value Value to set for the installAsManaged property.
    */
    public function setInstallAsManaged(?bool $value ): void {
        $this->installAsManaged = $value;
    }

    /**
     * Sets the md5Hash property value. The MD5 hash codes
     *  @param array<string>|null $value Value to set for the md5Hash property.
    */
    public function setMd5Hash(?array $value ): void {
        $this->md5Hash = $value;
    }

    /**
     * Sets the md5HashChunkSize property value. The chunk size for MD5 hash
     *  @param int|null $value Value to set for the md5HashChunkSize property.
    */
    public function setMd5HashChunkSize(?int $value ): void {
        $this->md5HashChunkSize = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param MacOSMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?MacOSMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the versionNumber property value. The version number of MacOS Line of Business (LoB) app.
     *  @param string|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?string $value ): void {
        $this->versionNumber = $value;
    }

}
