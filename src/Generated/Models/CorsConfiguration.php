<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CorsConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $allowedHeaders The allowedHeaders property
    */
    private ?array $allowedHeaders = null;
    
    /**
     * @var array<string>|null $allowedMethods The allowedMethods property
    */
    private ?array $allowedMethods = null;
    
    /**
     * @var array<string>|null $allowedOrigins The allowedOrigins property
    */
    private ?array $allowedOrigins = null;
    
    /**
     * @var int|null $maxAgeInSeconds The maxAgeInSeconds property
    */
    private ?int $maxAgeInSeconds = null;
    
    /**
     * @var string|null $resource The resource property
    */
    private ?string $resource = null;
    
    /**
     * Instantiates a new corsConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CorsConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CorsConfiguration {
        return new CorsConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedHeaders property value. The allowedHeaders property
     * @return array<string>|null
    */
    public function getAllowedHeaders(): ?array {
        return $this->allowedHeaders;
    }

    /**
     * Gets the allowedMethods property value. The allowedMethods property
     * @return array<string>|null
    */
    public function getAllowedMethods(): ?array {
        return $this->allowedMethods;
    }

    /**
     * Gets the allowedOrigins property value. The allowedOrigins property
     * @return array<string>|null
    */
    public function getAllowedOrigins(): ?array {
        return $this->allowedOrigins;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedHeaders' => function (ParseNode $n) use ($o) { $o->setAllowedHeaders($n->getCollectionOfPrimitiveValues()); },
            'allowedMethods' => function (ParseNode $n) use ($o) { $o->setAllowedMethods($n->getCollectionOfPrimitiveValues()); },
            'allowedOrigins' => function (ParseNode $n) use ($o) { $o->setAllowedOrigins($n->getCollectionOfPrimitiveValues()); },
            'maxAgeInSeconds' => function (ParseNode $n) use ($o) { $o->setMaxAgeInSeconds($n->getIntegerValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getStringValue()); },
        ];
    }

    /**
     * Gets the maxAgeInSeconds property value. The maxAgeInSeconds property
     * @return int|null
    */
    public function getMaxAgeInSeconds(): ?int {
        return $this->maxAgeInSeconds;
    }

    /**
     * Gets the resource property value. The resource property
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->resource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedHeaders', $this->allowedHeaders);
        $writer->writeCollectionOfPrimitiveValues('allowedMethods', $this->allowedMethods);
        $writer->writeCollectionOfPrimitiveValues('allowedOrigins', $this->allowedOrigins);
        $writer->writeIntegerValue('maxAgeInSeconds', $this->maxAgeInSeconds);
        $writer->writeStringValue('resource', $this->resource);
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
     * Sets the allowedHeaders property value. The allowedHeaders property
     *  @param array<string>|null $value Value to set for the allowedHeaders property.
    */
    public function setAllowedHeaders(?array $value ): void {
        $this->allowedHeaders = $value;
    }

    /**
     * Sets the allowedMethods property value. The allowedMethods property
     *  @param array<string>|null $value Value to set for the allowedMethods property.
    */
    public function setAllowedMethods(?array $value ): void {
        $this->allowedMethods = $value;
    }

    /**
     * Sets the allowedOrigins property value. The allowedOrigins property
     *  @param array<string>|null $value Value to set for the allowedOrigins property.
    */
    public function setAllowedOrigins(?array $value ): void {
        $this->allowedOrigins = $value;
    }

    /**
     * Sets the maxAgeInSeconds property value. The maxAgeInSeconds property
     *  @param int|null $value Value to set for the maxAgeInSeconds property.
    */
    public function setMaxAgeInSeconds(?int $value ): void {
        $this->maxAgeInSeconds = $value;
    }

    /**
     * Sets the resource property value. The resource property
     *  @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value ): void {
        $this->resource = $value;
    }

}
