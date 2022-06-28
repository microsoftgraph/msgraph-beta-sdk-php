<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSDmgApp extends MobileLobApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $ignoreVersionDetection A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device.
    */
    private ?bool $ignoreVersionDetection = null;
    
    /**
     * @var array<MacOSIncludedApp>|null $includedApps The list of apps expected to be installed by the DMG.
    */
    private ?array $includedApps = null;
    
    /**
     * @var MacOSMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?MacOSMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $primaryBundleId The primary CFBundleIdentifier of the DMG.
    */
    private ?string $primaryBundleId = null;
    
    /**
     * @var string|null $primaryBundleVersion The primary CFBundleVersion of the DMG.
    */
    private ?string $primaryBundleVersion = null;
    
    /**
     * Instantiates a new MacOSDmgApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSDmgApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSDmgApp {
        return new MacOSDmgApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ignoreVersionDetection' => function (ParseNode $n) use ($o) { $o->setIgnoreVersionDetection($n->getBooleanValue()); },
            'includedApps' => function (ParseNode $n) use ($o) { $o->setIncludedApps($n->getCollectionOfObjectValues(array(MacOSIncludedApp::class, 'createFromDiscriminatorValue'))); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(MacOSMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'primaryBundleId' => function (ParseNode $n) use ($o) { $o->setPrimaryBundleId($n->getStringValue()); },
            'primaryBundleVersion' => function (ParseNode $n) use ($o) { $o->setPrimaryBundleVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the ignoreVersionDetection property value. A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        return $this->ignoreVersionDetection;
    }

    /**
     * Gets the includedApps property value. The list of apps expected to be installed by the DMG.
     * @return array<MacOSIncludedApp>|null
    */
    public function getIncludedApps(): ?array {
        return $this->includedApps;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return MacOSMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?MacOSMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the primaryBundleId property value. The primary CFBundleIdentifier of the DMG.
     * @return string|null
    */
    public function getPrimaryBundleId(): ?string {
        return $this->primaryBundleId;
    }

    /**
     * Gets the primaryBundleVersion property value. The primary CFBundleVersion of the DMG.
     * @return string|null
    */
    public function getPrimaryBundleVersion(): ?string {
        return $this->primaryBundleVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('ignoreVersionDetection', $this->ignoreVersionDetection);
        $writer->writeCollectionOfObjectValues('includedApps', $this->includedApps);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('primaryBundleId', $this->primaryBundleId);
        $writer->writeStringValue('primaryBundleVersion', $this->primaryBundleVersion);
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
     * Sets the ignoreVersionDetection property value. A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device.
     *  @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value ): void {
        $this->ignoreVersionDetection = $value;
    }

    /**
     * Sets the includedApps property value. The list of apps expected to be installed by the DMG.
     *  @param array<MacOSIncludedApp>|null $value Value to set for the includedApps property.
    */
    public function setIncludedApps(?array $value ): void {
        $this->includedApps = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param MacOSMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?MacOSMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the primaryBundleId property value. The primary CFBundleIdentifier of the DMG.
     *  @param string|null $value Value to set for the primaryBundleId property.
    */
    public function setPrimaryBundleId(?string $value ): void {
        $this->primaryBundleId = $value;
    }

    /**
     * Sets the primaryBundleVersion property value. The primary CFBundleVersion of the DMG.
     *  @param string|null $value Value to set for the primaryBundleVersion property.
    */
    public function setPrimaryBundleVersion(?string $value ): void {
        $this->primaryBundleVersion = $value;
    }

}
