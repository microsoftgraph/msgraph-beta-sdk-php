<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvitedUserMessageInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<Recipient>|null $ccRecipients Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
    */
    private ?array $ccRecipients = null;
    
    /**
     * @var string|null $customizedMessageBody Customized message body you want to send if you don't want the default message.
    */
    private ?string $customizedMessageBody = null;
    
    /**
     * @var string|null $messageLanguage The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
    */
    private ?string $messageLanguage = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new invitedUserMessageInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.invitedUserMessageInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitedUserMessageInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitedUserMessageInfo {
        return new InvitedUserMessageInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the ccRecipients property value. Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
     * @return array<Recipient>|null
    */
    public function getCcRecipients(): ?array {
        return $this->ccRecipients;
    }

    /**
     * Gets the customizedMessageBody property value. Customized message body you want to send if you don't want the default message.
     * @return string|null
    */
    public function getCustomizedMessageBody(): ?string {
        return $this->customizedMessageBody;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ccRecipients' => function (ParseNode $n) use ($o) { $o->setCcRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'customizedMessageBody' => function (ParseNode $n) use ($o) { $o->setCustomizedMessageBody($n->getStringValue()); },
            'messageLanguage' => function (ParseNode $n) use ($o) { $o->setMessageLanguage($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the messageLanguage property value. The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
     * @return string|null
    */
    public function getMessageLanguage(): ?string {
        return $this->messageLanguage;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->ccRecipients);
        $writer->writeStringValue('customizedMessageBody', $this->customizedMessageBody);
        $writer->writeStringValue('messageLanguage', $this->messageLanguage);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the ccRecipients property value. Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
     *  @param array<Recipient>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value ): void {
        $this->ccRecipients = $value;
    }

    /**
     * Sets the customizedMessageBody property value. Customized message body you want to send if you don't want the default message.
     *  @param string|null $value Value to set for the customizedMessageBody property.
    */
    public function setCustomizedMessageBody(?string $value ): void {
        $this->customizedMessageBody = $value;
    }

    /**
     * Sets the messageLanguage property value. The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
     *  @param string|null $value Value to set for the messageLanguage property.
    */
    public function setMessageLanguage(?string $value ): void {
        $this->messageLanguage = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
