<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CorsConfiguration_v2 extends Entity implements Parsable 
{
    /**
     * Instantiates a new CorsConfiguration_v2 and sets the default values.
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
     * Gets the allowedHeaders property value. The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
     * @return array<string>|null
    */
    public function getAllowedHeaders(): ?array {
        $val = $this->getBackingStore()->get('allowedHeaders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedHeaders'");
    }

    /**
     * Gets the allowedMethods property value. The HTTP request methods that the origin domain may use for a CORS request.
     * @return array<string>|null
    */
    public function getAllowedMethods(): ?array {
        $val = $this->getBackingStore()->get('allowedMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedMethods'");
    }

    /**
     * Gets the allowedOrigins property value. The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user agent sends to the service.
     * @return array<string>|null
    */
    public function getAllowedOrigins(): ?array {
        $val = $this->getBackingStore()->get('allowedOrigins');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOrigins'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedHeaders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedHeaders($val);
            },
            'allowedMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedMethods($val);
            },
            'allowedOrigins' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedOrigins($val);
            },
            'maxAgeInSeconds' => fn(ParseNode $n) => $o->setMaxAgeInSeconds($n->getIntegerValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
        ]);
    }

    /**
     * Gets the maxAgeInSeconds property value. The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
     * @return int|null
    */
    public function getMaxAgeInSeconds(): ?int {
        $val = $this->getBackingStore()->get('maxAgeInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxAgeInSeconds'");
    }

    /**
     * Gets the resource property value. Resource within the application segment for which CORS permissions are granted. / grants permission for the whole app segment.
     * @return string|null
    */
    public function getResource(): ?string {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
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
     * Sets the allowedHeaders property value. The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
     * @param array<string>|null $value Value to set for the allowedHeaders property.
    */
    public function setAllowedHeaders(?array $value): void {
        $this->getBackingStore()->set('allowedHeaders', $value);
    }

    /**
     * Sets the allowedMethods property value. The HTTP request methods that the origin domain may use for a CORS request.
     * @param array<string>|null $value Value to set for the allowedMethods property.
    */
    public function setAllowedMethods(?array $value): void {
        $this->getBackingStore()->set('allowedMethods', $value);
    }

    /**
     * Sets the allowedOrigins property value. The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user agent sends to the service.
     * @param array<string>|null $value Value to set for the allowedOrigins property.
    */
    public function setAllowedOrigins(?array $value): void {
        $this->getBackingStore()->set('allowedOrigins', $value);
    }

    /**
     * Sets the maxAgeInSeconds property value. The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
     * @param int|null $value Value to set for the maxAgeInSeconds property.
    */
    public function setMaxAgeInSeconds(?int $value): void {
        $this->getBackingStore()->set('maxAgeInSeconds', $value);
    }

    /**
     * Sets the resource property value. Resource within the application segment for which CORS permissions are granted. / grants permission for the whole app segment.
     * @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
