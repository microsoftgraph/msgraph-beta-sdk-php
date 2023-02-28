<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSDmgApp extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new MacOSDmgApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSDmgApp');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ignoreVersionDetection' => fn(ParseNode $n) => $o->setIgnoreVersionDetection($n->getBooleanValue()),
            'includedApps' => fn(ParseNode $n) => $o->setIncludedApps($n->getCollectionOfObjectValues([MacOSIncludedApp::class, 'createFromDiscriminatorValue'])),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([MacOSMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'primaryBundleId' => fn(ParseNode $n) => $o->setPrimaryBundleId($n->getStringValue()),
            'primaryBundleVersion' => fn(ParseNode $n) => $o->setPrimaryBundleVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ignoreVersionDetection property value. A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        return $this->getBackingStore()->get('ignoreVersionDetection');
    }

    /**
     * Gets the includedApps property value. The list of apps expected to be installed by the DMG.
     * @return array<MacOSIncludedApp>|null
    */
    public function getIncludedApps(): ?array {
        return $this->getBackingStore()->get('includedApps');
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return MacOSMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?MacOSMinimumOperatingSystem {
        return $this->getBackingStore()->get('minimumSupportedOperatingSystem');
    }

    /**
     * Gets the primaryBundleId property value. The primary CFBundleIdentifier of the DMG.
     * @return string|null
    */
    public function getPrimaryBundleId(): ?string {
        return $this->getBackingStore()->get('primaryBundleId');
    }

    /**
     * Gets the primaryBundleVersion property value. The primary CFBundleVersion of the DMG.
     * @return string|null
    */
    public function getPrimaryBundleVersion(): ?string {
        return $this->getBackingStore()->get('primaryBundleVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('ignoreVersionDetection', $this->getIgnoreVersionDetection());
        $writer->writeCollectionOfObjectValues('includedApps', $this->getIncludedApps());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('primaryBundleId', $this->getPrimaryBundleId());
        $writer->writeStringValue('primaryBundleVersion', $this->getPrimaryBundleVersion());
    }

    /**
     * Sets the ignoreVersionDetection property value. A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device.
     * @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value): void {
        $this->getBackingStore()->set('ignoreVersionDetection', $value);
    }

    /**
     * Sets the includedApps property value. The list of apps expected to be installed by the DMG.
     * @param array<MacOSIncludedApp>|null $value Value to set for the includedApps property.
    */
    public function setIncludedApps(?array $value): void {
        $this->getBackingStore()->set('includedApps', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @param MacOSMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?MacOSMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the primaryBundleId property value. The primary CFBundleIdentifier of the DMG.
     * @param string|null $value Value to set for the primaryBundleId property.
    */
    public function setPrimaryBundleId(?string $value): void {
        $this->getBackingStore()->set('primaryBundleId', $value);
    }

    /**
     * Sets the primaryBundleVersion property value. The primary CFBundleVersion of the DMG.
     * @param string|null $value Value to set for the primaryBundleVersion property.
    */
    public function setPrimaryBundleVersion(?string $value): void {
        $this->getBackingStore()->set('primaryBundleVersion', $value);
    }

}
