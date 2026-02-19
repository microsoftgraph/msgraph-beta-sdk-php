<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RedirectUriConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RedirectUriConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedirectUriConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedirectUriConfiguration {
        return new RedirectUriConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'uriWithBlockedDomain' => fn(ParseNode $n) => $o->setUriWithBlockedDomain($n->getObjectValue([RedirectUriBlockedDomainConfiguration::class, 'createFromDiscriminatorValue'])),
            'uriWithBlockedScheme' => fn(ParseNode $n) => $o->setUriWithBlockedScheme($n->getObjectValue([RedirectUriBlockedSchemeConfiguration::class, 'createFromDiscriminatorValue'])),
            'uriWithoutAllowedDomain' => fn(ParseNode $n) => $o->setUriWithoutAllowedDomain($n->getObjectValue([RedirectUriAllowedDomainConfiguration::class, 'createFromDiscriminatorValue'])),
            'uriWithoutAllowedScheme' => fn(ParseNode $n) => $o->setUriWithoutAllowedScheme($n->getObjectValue([RedirectUriAllowedSchemeConfiguration::class, 'createFromDiscriminatorValue'])),
            'uriWithWildcard' => fn(ParseNode $n) => $o->setUriWithWildcard($n->getObjectValue([RedirectUriWildcardConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the uriWithBlockedDomain property value. The uriWithBlockedDomain property
     * @return RedirectUriBlockedDomainConfiguration|null
    */
    public function getUriWithBlockedDomain(): ?RedirectUriBlockedDomainConfiguration {
        $val = $this->getBackingStore()->get('uriWithBlockedDomain');
        if (is_null($val) || $val instanceof RedirectUriBlockedDomainConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uriWithBlockedDomain'");
    }

    /**
     * Gets the uriWithBlockedScheme property value. The uriWithBlockedScheme property
     * @return RedirectUriBlockedSchemeConfiguration|null
    */
    public function getUriWithBlockedScheme(): ?RedirectUriBlockedSchemeConfiguration {
        $val = $this->getBackingStore()->get('uriWithBlockedScheme');
        if (is_null($val) || $val instanceof RedirectUriBlockedSchemeConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uriWithBlockedScheme'");
    }

    /**
     * Gets the uriWithoutAllowedDomain property value. The uriWithoutAllowedDomain property
     * @return RedirectUriAllowedDomainConfiguration|null
    */
    public function getUriWithoutAllowedDomain(): ?RedirectUriAllowedDomainConfiguration {
        $val = $this->getBackingStore()->get('uriWithoutAllowedDomain');
        if (is_null($val) || $val instanceof RedirectUriAllowedDomainConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uriWithoutAllowedDomain'");
    }

    /**
     * Gets the uriWithoutAllowedScheme property value. The uriWithoutAllowedScheme property
     * @return RedirectUriAllowedSchemeConfiguration|null
    */
    public function getUriWithoutAllowedScheme(): ?RedirectUriAllowedSchemeConfiguration {
        $val = $this->getBackingStore()->get('uriWithoutAllowedScheme');
        if (is_null($val) || $val instanceof RedirectUriAllowedSchemeConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uriWithoutAllowedScheme'");
    }

    /**
     * Gets the uriWithWildcard property value. The uriWithWildcard property
     * @return RedirectUriWildcardConfiguration|null
    */
    public function getUriWithWildcard(): ?RedirectUriWildcardConfiguration {
        $val = $this->getBackingStore()->get('uriWithWildcard');
        if (is_null($val) || $val instanceof RedirectUriWildcardConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uriWithWildcard'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('uriWithBlockedDomain', $this->getUriWithBlockedDomain());
        $writer->writeObjectValue('uriWithBlockedScheme', $this->getUriWithBlockedScheme());
        $writer->writeObjectValue('uriWithoutAllowedDomain', $this->getUriWithoutAllowedDomain());
        $writer->writeObjectValue('uriWithoutAllowedScheme', $this->getUriWithoutAllowedScheme());
        $writer->writeObjectValue('uriWithWildcard', $this->getUriWithWildcard());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the uriWithBlockedDomain property value. The uriWithBlockedDomain property
     * @param RedirectUriBlockedDomainConfiguration|null $value Value to set for the uriWithBlockedDomain property.
    */
    public function setUriWithBlockedDomain(?RedirectUriBlockedDomainConfiguration $value): void {
        $this->getBackingStore()->set('uriWithBlockedDomain', $value);
    }

    /**
     * Sets the uriWithBlockedScheme property value. The uriWithBlockedScheme property
     * @param RedirectUriBlockedSchemeConfiguration|null $value Value to set for the uriWithBlockedScheme property.
    */
    public function setUriWithBlockedScheme(?RedirectUriBlockedSchemeConfiguration $value): void {
        $this->getBackingStore()->set('uriWithBlockedScheme', $value);
    }

    /**
     * Sets the uriWithoutAllowedDomain property value. The uriWithoutAllowedDomain property
     * @param RedirectUriAllowedDomainConfiguration|null $value Value to set for the uriWithoutAllowedDomain property.
    */
    public function setUriWithoutAllowedDomain(?RedirectUriAllowedDomainConfiguration $value): void {
        $this->getBackingStore()->set('uriWithoutAllowedDomain', $value);
    }

    /**
     * Sets the uriWithoutAllowedScheme property value. The uriWithoutAllowedScheme property
     * @param RedirectUriAllowedSchemeConfiguration|null $value Value to set for the uriWithoutAllowedScheme property.
    */
    public function setUriWithoutAllowedScheme(?RedirectUriAllowedSchemeConfiguration $value): void {
        $this->getBackingStore()->set('uriWithoutAllowedScheme', $value);
    }

    /**
     * Sets the uriWithWildcard property value. The uriWithWildcard property
     * @param RedirectUriWildcardConfiguration|null $value Value to set for the uriWithWildcard property.
    */
    public function setUriWithWildcard(?RedirectUriWildcardConfiguration $value): void {
        $this->getBackingStore()->set('uriWithWildcard', $value);
    }

}
