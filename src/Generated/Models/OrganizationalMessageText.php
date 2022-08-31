<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageText implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $buttonText Indicates the text that will be displayed on the button of the message. This field applies to the softLanding surface
    */
    private ?string $buttonText = null;
    
    /**
     * @var string|null $clickUrl Indicates the url that the user will be directed to when the message is clicked
    */
    private ?string $clickUrl = null;
    
    /**
     * @var string|null $message Indicates the message that will be displayed
    */
    private ?string $message = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $title Indicates the title that will be displayed
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new organizationalMessageText and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageText');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageText
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageText {
        return new OrganizationalMessageText();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the buttonText property value. Indicates the text that will be displayed on the button of the message. This field applies to the softLanding surface
     * @return string|null
    */
    public function getButtonText(): ?string {
        return $this->buttonText;
    }

    /**
     * Gets the clickUrl property value. Indicates the url that the user will be directed to when the message is clicked
     * @return string|null
    */
    public function getClickUrl(): ?string {
        return $this->clickUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buttonText' => function (ParseNode $n) use ($o) { $o->setButtonText($n->getStringValue()); },
            'clickUrl' => function (ParseNode $n) use ($o) { $o->setClickUrl($n->getStringValue()); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
        ];
    }

    /**
     * Gets the message property value. Indicates the message that will be displayed
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the title property value. Indicates the title that will be displayed
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('buttonText', $this->buttonText);
        $writer->writeStringValue('clickUrl', $this->clickUrl);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('title', $this->title);
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
     * Sets the buttonText property value. Indicates the text that will be displayed on the button of the message. This field applies to the softLanding surface
     *  @param string|null $value Value to set for the buttonText property.
    */
    public function setButtonText(?string $value ): void {
        $this->buttonText = $value;
    }

    /**
     * Sets the clickUrl property value. Indicates the url that the user will be directed to when the message is clicked
     *  @param string|null $value Value to set for the clickUrl property.
    */
    public function setClickUrl(?string $value ): void {
        $this->clickUrl = $value;
    }

    /**
     * Sets the message property value. Indicates the message that will be displayed
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the title property value. Indicates the title that will be displayed
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
