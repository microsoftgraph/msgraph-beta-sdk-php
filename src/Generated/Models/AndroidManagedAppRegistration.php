<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedAppRegistration extends ManagedAppRegistration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $patchVersion The patch version for the current android app registration
    */
    private ?string $patchVersion = null;
    
    /**
     * Instantiates a new AndroidManagedAppRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedAppRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedAppRegistration {
        return new AndroidManagedAppRegistration();
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
            'patchVersion' => function (ParseNode $n) use ($o) { $o->setPatchVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the patchVersion property value. The patch version for the current android app registration
     * @return string|null
    */
    public function getPatchVersion(): ?string {
        return $this->patchVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('patchVersion', $this->patchVersion);
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
     * Sets the patchVersion property value. The patch version for the current android app registration
     *  @param string|null $value Value to set for the patchVersion property.
    */
    public function setPatchVersion(?string $value ): void {
        $this->patchVersion = $value;
    }

}
