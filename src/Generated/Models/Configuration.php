<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Configuration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $authorizedAppIds The authorizedAppIds property
    */
    private ?array $authorizedAppIds = null;
    
    /**
     * @var array<string>|null $authorizedApps The authorizedApps property
    */
    private ?array $authorizedApps = null;
    
    /**
     * Instantiates a new configuration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Configuration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Configuration {
        return new Configuration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authorizedAppIds property value. The authorizedAppIds property
     * @return array<string>|null
    */
    public function getAuthorizedAppIds(): ?array {
        return $this->authorizedAppIds;
    }

    /**
     * Gets the authorizedApps property value. The authorizedApps property
     * @return array<string>|null
    */
    public function getAuthorizedApps(): ?array {
        return $this->authorizedApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizedAppIds' => function (ParseNode $n) use ($o) { $o->setAuthorizedAppIds($n->getCollectionOfPrimitiveValues()); },
            'authorizedApps' => function (ParseNode $n) use ($o) { $o->setAuthorizedApps($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('authorizedAppIds', $this->authorizedAppIds);
        $writer->writeCollectionOfPrimitiveValues('authorizedApps', $this->authorizedApps);
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
     * Sets the authorizedAppIds property value. The authorizedAppIds property
     *  @param array<string>|null $value Value to set for the authorizedAppIds property.
    */
    public function setAuthorizedAppIds(?array $value ): void {
        $this->authorizedAppIds = $value;
    }

    /**
     * Sets the authorizedApps property value. The authorizedApps property
     *  @param array<string>|null $value Value to set for the authorizedApps property.
    */
    public function setAuthorizedApps(?array $value ): void {
        $this->authorizedApps = $value;
    }

}
