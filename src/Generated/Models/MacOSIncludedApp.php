<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSIncludedApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $bundleId The CFBundleIdentifier.
    */
    private ?string $bundleId = null;
    
    /**
     * @var string|null $bundleVersion The CFBundleVersion.
    */
    private ?string $bundleVersion = null;
    
    /**
     * Instantiates a new macOSIncludedApp and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSIncludedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSIncludedApp {
        return new MacOSIncludedApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bundleId property value. The CFBundleIdentifier.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * Gets the bundleVersion property value. The CFBundleVersion.
     * @return string|null
    */
    public function getBundleVersion(): ?string {
        return $this->bundleVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'bundleVersion' => function (ParseNode $n) use ($o) { $o->setBundleVersion($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeStringValue('bundleVersion', $this->bundleVersion);
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
     * Sets the bundleId property value. The CFBundleIdentifier.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the bundleVersion property value. The CFBundleVersion.
     *  @param string|null $value Value to set for the bundleVersion property.
    */
    public function setBundleVersion(?string $value ): void {
        $this->bundleVersion = $value;
    }

}
