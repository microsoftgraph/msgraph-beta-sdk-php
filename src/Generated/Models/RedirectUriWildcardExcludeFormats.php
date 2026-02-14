<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RedirectUriWildcardExcludeFormats implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RedirectUriWildcardExcludeFormats and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedirectUriWildcardExcludeFormats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedirectUriWildcardExcludeFormats {
        return new RedirectUriWildcardExcludeFormats();
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
     * Gets the excludeWildcardsInPath property value. The excludeWildcardsInPath property
     * @return bool|null
    */
    public function getExcludeWildcardsInPath(): ?bool {
        $val = $this->getBackingStore()->get('excludeWildcardsInPath');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeWildcardsInPath'");
    }

    /**
     * Gets the excludeWildcardsInPathWithDomains property value. The excludeWildcardsInPathWithDomains property
     * @return array<string>|null
    */
    public function getExcludeWildcardsInPathWithDomains(): ?array {
        $val = $this->getBackingStore()->get('excludeWildcardsInPathWithDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeWildcardsInPathWithDomains'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeWildcardsInPath' => fn(ParseNode $n) => $o->setExcludeWildcardsInPath($n->getBooleanValue()),
            'excludeWildcardsInPathWithDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeWildcardsInPathWithDomains($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('excludeWildcardsInPath', $this->getExcludeWildcardsInPath());
        $writer->writeCollectionOfPrimitiveValues('excludeWildcardsInPathWithDomains', $this->getExcludeWildcardsInPathWithDomains());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the excludeWildcardsInPath property value. The excludeWildcardsInPath property
     * @param bool|null $value Value to set for the excludeWildcardsInPath property.
    */
    public function setExcludeWildcardsInPath(?bool $value): void {
        $this->getBackingStore()->set('excludeWildcardsInPath', $value);
    }

    /**
     * Sets the excludeWildcardsInPathWithDomains property value. The excludeWildcardsInPathWithDomains property
     * @param array<string>|null $value Value to set for the excludeWildcardsInPathWithDomains property.
    */
    public function setExcludeWildcardsInPathWithDomains(?array $value): void {
        $this->getBackingStore()->set('excludeWildcardsInPathWithDomains', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
