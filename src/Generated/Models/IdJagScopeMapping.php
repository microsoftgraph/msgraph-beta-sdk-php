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

/**
 * Maps Resource Authorization Server scopes to an Entra OAuth2 permission.
*/
class IdJagScopeMapping implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdJagScopeMapping and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdJagScopeMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdJagScopeMapping {
        return new IdJagScopeMapping();
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
            'oauth2Permission' => fn(ParseNode $n) => $o->setOauth2Permission($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'validResourceAuthorizationServerScopes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValidResourceAuthorizationServerScopes($val);
            },
        ];
    }

    /**
     * Gets the oauth2Permission property value. Required and non-null in each scope mapping. An enabled delegated permission exposed by the resource application for ID-JAG use.
     * @return string|null
    */
    public function getOauth2Permission(): ?string {
        $val = $this->getBackingStore()->get('oauth2Permission');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oauth2Permission'");
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
     * Gets the validResourceAuthorizationServerScopes property value. Required and non-null in each scope mapping. One or two equivalent, case-sensitive Resource Authorization Server scopes for mapped behavior; empty for the single passthrough mapping.
     * @return array<string>|null
    */
    public function getValidResourceAuthorizationServerScopes(): ?array {
        $val = $this->getBackingStore()->get('validResourceAuthorizationServerScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validResourceAuthorizationServerScopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('oauth2Permission', $this->getOauth2Permission());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('validResourceAuthorizationServerScopes', $this->getValidResourceAuthorizationServerScopes());
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
     * Sets the oauth2Permission property value. Required and non-null in each scope mapping. An enabled delegated permission exposed by the resource application for ID-JAG use.
     * @param string|null $value Value to set for the oauth2Permission property.
    */
    public function setOauth2Permission(?string $value): void {
        $this->getBackingStore()->set('oauth2Permission', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the validResourceAuthorizationServerScopes property value. Required and non-null in each scope mapping. One or two equivalent, case-sensitive Resource Authorization Server scopes for mapped behavior; empty for the single passthrough mapping.
     * @param array<string>|null $value Value to set for the validResourceAuthorizationServerScopes property.
    */
    public function setValidResourceAuthorizationServerScopes(?array $value): void {
        $this->getBackingStore()->set('validResourceAuthorizationServerScopes', $value);
    }

}
