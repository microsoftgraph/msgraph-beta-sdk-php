<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerUserFacingMessage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultMessage The default message displayed if the user's locale doesn't match with any of the localized messages
    */
    private ?string $defaultMessage = null;
    
    /**
     * @var array<KeyValuePair>|null $localizedMessages The list of <locale, message> pairs. This collection can contain a maximum of 500 elements.
    */
    private ?array $localizedMessages = null;
    
    /**
     * Instantiates a new androidDeviceOwnerUserFacingMessage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerUserFacingMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerUserFacingMessage {
        return new AndroidDeviceOwnerUserFacingMessage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultMessage property value. The default message displayed if the user's locale doesn't match with any of the localized messages
     * @return string|null
    */
    public function getDefaultMessage(): ?string {
        return $this->defaultMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultMessage' => function (ParseNode $n) use ($o) { $o->setDefaultMessage($n->getStringValue()); },
            'localizedMessages' => function (ParseNode $n) use ($o) { $o->setLocalizedMessages($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the localizedMessages property value. The list of <locale, message> pairs. This collection can contain a maximum of 500 elements.
     * @return array<KeyValuePair>|null
    */
    public function getLocalizedMessages(): ?array {
        return $this->localizedMessages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultMessage', $this->defaultMessage);
        $writer->writeCollectionOfObjectValues('localizedMessages', $this->localizedMessages);
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
     * Sets the defaultMessage property value. The default message displayed if the user's locale doesn't match with any of the localized messages
     *  @param string|null $value Value to set for the defaultMessage property.
    */
    public function setDefaultMessage(?string $value ): void {
        $this->defaultMessage = $value;
    }

    /**
     * Sets the localizedMessages property value. The list of <locale, message> pairs. This collection can contain a maximum of 500 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the localizedMessages property.
    */
    public function setLocalizedMessages(?array $value ): void {
        $this->localizedMessages = $value;
    }

}
