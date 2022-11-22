<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CorsConfiguration_v2 extends Entity implements Parsable 
{
    /**
     * Instantiates a new corsConfiguration_v2 and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CorsConfiguration_v2
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CorsConfiguration_v2 {
        return new CorsConfiguration_v2();
    }

    /**
     * Gets the allowedHeaders property value. The allowedHeaders property
     * @return array<string>|null
    */
    public function getAllowedHeaders(): ?array {
        return $this->getBackingStore()->get('allowedHeaders');
    }

    /**
     * Gets the allowedMethods property value. The allowedMethods property
     * @return array<string>|null
    */
    public function getAllowedMethods(): ?array {
        return $this->getBackingStore()->get('allowedMethods');
    }

    /**
     * Gets the allowedOrigins property value. The allowedOrigins property
     * @return array<string>|null
    */
    public function getAllowedOrigins(): ?array {
        return $this->getBackingStore()->get('allowedOrigins');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedHeaders' => fn(ParseNode $n) => $o->setAllowedHeaders($n->getCollectionOfPrimitiveValues()),
            'allowedMethods' => fn(ParseNode $n) => $o->setAllowedMethods($n->getCollectionOfPrimitiveValues()),
            'allowedOrigins' => fn(ParseNode $n) => $o->setAllowedOrigins($n->getCollectionOfPrimitiveValues()),
            'maxAgeInSeconds' => fn(ParseNode $n) => $o->setMaxAgeInSeconds($n->getIntegerValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
        ]);
    }

    /**
     * Gets the maxAgeInSeconds property value. The maxAgeInSeconds property
     * @return int|null
    */
    public function getMaxAgeInSeconds(): ?int {
        return $this->getBackingStore()->get('maxAgeInSeconds');
    }

    /**
     * Gets the resource property value. The resource property
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedHeaders', $this->getAllowedHeaders());
        $writer->writeCollectionOfPrimitiveValues('allowedMethods', $this->getAllowedMethods());
        $writer->writeCollectionOfPrimitiveValues('allowedOrigins', $this->getAllowedOrigins());
        $writer->writeIntegerValue('maxAgeInSeconds', $this->getMaxAgeInSeconds());
        $writer->writeStringValue('resource', $this->getResource());
    }

    /**
     * Sets the allowedHeaders property value. The allowedHeaders property
     *  @param array<string>|null $value Value to set for the allowedHeaders property.
    */
    public function setAllowedHeaders(?array $value): void {
        $this->getBackingStore()->set('allowedHeaders', $value);
    }

    /**
     * Sets the allowedMethods property value. The allowedMethods property
     *  @param array<string>|null $value Value to set for the allowedMethods property.
    */
    public function setAllowedMethods(?array $value): void {
        $this->getBackingStore()->set('allowedMethods', $value);
    }

    /**
     * Sets the allowedOrigins property value. The allowedOrigins property
     *  @param array<string>|null $value Value to set for the allowedOrigins property.
    */
    public function setAllowedOrigins(?array $value): void {
        $this->getBackingStore()->set('allowedOrigins', $value);
    }

    /**
     * Sets the maxAgeInSeconds property value. The maxAgeInSeconds property
     *  @param int|null $value Value to set for the maxAgeInSeconds property.
    */
    public function setMaxAgeInSeconds(?int $value): void {
        $this->getBackingStore()->set('maxAgeInSeconds', $value);
    }

    /**
     * Sets the resource property value. The resource property
     *  @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
