<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CorsConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $allowedHeaders The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
    */
    private ?array $allowedHeaders = null;
    
    /**
     * @var array<string>|null $allowedMethods The HTTP request methods that the origin domain may use for a CORS request.
    */
    private ?array $allowedMethods = null;
    
    /**
     * @var array<string>|null $allowedOrigins The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user age sends to the service.
    */
    private ?array $allowedOrigins = null;
    
    /**
     * @var int|null $maxAgeInSeconds The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
    */
    private ?int $maxAgeInSeconds = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $resource Resource within the application segment for which CORS permissions are granted. / grants permission for whole app segment.
    */
    private ?string $resource = null;
    
    /**
     * Instantiates a new corsConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.corsConfiguration');
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
     * Gets the allowedHeaders property value. The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
     * @return array<string>|null
    */
    public function getAllowedHeaders(): ?array {
        return $this->allowedHeaders;
    }

    /**
     * Gets the allowedMethods property value. The HTTP request methods that the origin domain may use for a CORS request.
     * @return array<string>|null
    */
    public function getAllowedMethods(): ?array {
        return $this->allowedMethods;
    }

    /**
     * Gets the allowedOrigins property value. The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user age sends to the service.
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
            'allowedHeaders' => fn(ParseNode $n) => $o->setAllowedHeaders($n->getCollectionOfPrimitiveValues()),
            'allowedMethods' => fn(ParseNode $n) => $o->setAllowedMethods($n->getCollectionOfPrimitiveValues()),
            'allowedOrigins' => fn(ParseNode $n) => $o->setAllowedOrigins($n->getCollectionOfPrimitiveValues()),
            'maxAgeInSeconds' => fn(ParseNode $n) => $o->setMaxAgeInSeconds($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
        ];
    }

    /**
     * Gets the maxAgeInSeconds property value. The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
     * @return int|null
    */
    public function getMaxAgeInSeconds(): ?int {
        return $this->maxAgeInSeconds;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the resource property value. Resource within the application segment for which CORS permissions are granted. / grants permission for whole app segment.
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the allowedHeaders property value. The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
     *  @param array<string>|null $value Value to set for the allowedHeaders property.
    */
    public function setAllowedHeaders(?array $value ): void {
        $this->allowedHeaders = $value;
    }

    /**
     * Sets the allowedMethods property value. The HTTP request methods that the origin domain may use for a CORS request.
     *  @param array<string>|null $value Value to set for the allowedMethods property.
    */
    public function setAllowedMethods(?array $value ): void {
        $this->allowedMethods = $value;
    }

    /**
     * Sets the allowedOrigins property value. The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user age sends to the service.
     *  @param array<string>|null $value Value to set for the allowedOrigins property.
    */
    public function setAllowedOrigins(?array $value ): void {
        $this->allowedOrigins = $value;
    }

    /**
     * Sets the maxAgeInSeconds property value. The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
     *  @param int|null $value Value to set for the maxAgeInSeconds property.
    */
    public function setMaxAgeInSeconds(?int $value ): void {
        $this->maxAgeInSeconds = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the resource property value. Resource within the application segment for which CORS permissions are granted. / grants permission for whole app segment.
     *  @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value ): void {
        $this->resource = $value;
    }

}
