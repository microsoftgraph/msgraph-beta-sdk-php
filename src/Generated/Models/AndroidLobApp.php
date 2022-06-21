<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidLobApp extends MobileLobApp implements Parsable 
{
    /**
     * @var string|null $identityName The Identity Name.
    */
    private ?string $identityName = null;
    
    /**
     * @var string|null $identityVersion The identity version.
    */
    private ?string $identityVersion = null;
    
    /**
     * @var AndroidMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?AndroidMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $packageId The package identifier.
    */
    private ?string $packageId = null;
    
    /**
     * @var string|null $versionCode The version code of Android Line of Business (LoB) app.
    */
    private ?string $versionCode = null;
    
    /**
     * @var string|null $versionName The version name of Android Line of Business (LoB) app.
    */
    private ?string $versionName = null;
    
    /**
     * Instantiates a new AndroidLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidLobApp {
        return new AndroidLobApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityName' => function (ParseNode $n) use ($o) { $o->setIdentityName($n->getStringValue()); },
            'identityVersion' => function (ParseNode $n) use ($o) { $o->setIdentityVersion($n->getStringValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(AndroidMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'packageId' => function (ParseNode $n) use ($o) { $o->setPackageId($n->getStringValue()); },
            'versionCode' => function (ParseNode $n) use ($o) { $o->setVersionCode($n->getStringValue()); },
            'versionName' => function (ParseNode $n) use ($o) { $o->setVersionName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityName property value. The Identity Name.
     * @return string|null
    */
    public function getIdentityName(): ?string {
        return $this->identityName;
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->identityVersion;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return AndroidMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?AndroidMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the packageId property value. The package identifier.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the versionCode property value. The version code of Android Line of Business (LoB) app.
     * @return string|null
    */
    public function getVersionCode(): ?string {
        return $this->versionCode;
    }

    /**
     * Gets the versionName property value. The version name of Android Line of Business (LoB) app.
     * @return string|null
    */
    public function getVersionName(): ?string {
        return $this->versionName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('identityName', $this->identityName);
        $writer->writeStringValue('identityVersion', $this->identityVersion);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('packageId', $this->packageId);
        $writer->writeStringValue('versionCode', $this->versionCode);
        $writer->writeStringValue('versionName', $this->versionName);
    }

    /**
     * Sets the identityName property value. The Identity Name.
     *  @param string|null $value Value to set for the identityName property.
    */
    public function setIdentityName(?string $value ): void {
        $this->identityName = $value;
    }

    /**
     * Sets the identityVersion property value. The identity version.
     *  @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value ): void {
        $this->identityVersion = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param AndroidMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?AndroidMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the packageId property value. The package identifier.
     *  @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value ): void {
        $this->packageId = $value;
    }

    /**
     * Sets the versionCode property value. The version code of Android Line of Business (LoB) app.
     *  @param string|null $value Value to set for the versionCode property.
    */
    public function setVersionCode(?string $value ): void {
        $this->versionCode = $value;
    }

    /**
     * Sets the versionName property value. The version name of Android Line of Business (LoB) app.
     *  @param string|null $value Value to set for the versionName property.
    */
    public function setVersionName(?string $value ): void {
        $this->versionName = $value;
    }

}
