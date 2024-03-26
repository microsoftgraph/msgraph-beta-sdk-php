<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ConvertExternalToInternalMemberUser;

use Microsoft\Graph\Beta\Generated\Models\PasswordProfile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConvertExternalToInternalMemberUserPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConvertExternalToInternalMemberUserPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConvertExternalToInternalMemberUserPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConvertExternalToInternalMemberUserPostRequestBody {
        return new ConvertExternalToInternalMemberUserPostRequestBody();
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
            'mail' => fn(ParseNode $n) => $o->setMail($n->getStringValue()),
            'passwordProfile' => fn(ParseNode $n) => $o->setPasswordProfile($n->getObjectValue([PasswordProfile::class, 'createFromDiscriminatorValue'])),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the mail property value. The mail property
     * @return string|null
    */
    public function getMail(): ?string {
        $val = $this->getBackingStore()->get('mail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mail'");
    }

    /**
     * Gets the passwordProfile property value. The passwordProfile property
     * @return PasswordProfile|null
    */
    public function getPasswordProfile(): ?PasswordProfile {
        $val = $this->getBackingStore()->get('passwordProfile');
        if (is_null($val) || $val instanceof PasswordProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordProfile'");
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('mail', $this->getMail());
        $writer->writeObjectValue('passwordProfile', $this->getPasswordProfile());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
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
     * Sets the mail property value. The mail property
     * @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the passwordProfile property value. The passwordProfile property
     * @param PasswordProfile|null $value Value to set for the passwordProfile property.
    */
    public function setPasswordProfile(?PasswordProfile $value): void {
        $this->getBackingStore()->set('passwordProfile', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
