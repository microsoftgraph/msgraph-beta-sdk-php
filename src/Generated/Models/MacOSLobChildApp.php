<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSLobChildApp implements AdditionalDataHolder, Parsable 
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
     * @var string|null $bundleId The Identity Name.
    */
    private ?string $bundleId = null;
    
    /**
     * @var string|null $versionNumber The version number of MacOS Line of Business (LoB) app.
    */
    private ?string $versionNumber = null;
    
    /**
     * Instantiates a new macOSLobChildApp and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSLobChildApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSLobChildApp {
        return new MacOSLobChildApp();
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
     * Gets the bundleId property value. The Identity Name.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buildNumber' => function (ParseNode $n) use ($o) { $o->setBuildNumber($n->getStringValue()); },
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'versionNumber' => function (ParseNode $n) use ($o) { $o->setVersionNumber($n->getStringValue()); },
        ];
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
        $writer->writeStringValue('buildNumber', $this->buildNumber);
        $writer->writeStringValue('bundleId', $this->bundleId);
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
     * Sets the bundleId property value. The Identity Name.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the versionNumber property value. The version number of MacOS Line of Business (LoB) app.
     *  @param string|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?string $value ): void {
        $this->versionNumber = $value;
    }

}
