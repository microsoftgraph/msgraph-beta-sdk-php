<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageLocalizedText implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $locale The locale for this text
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var OrganizationalMessageText|null $text The text that will be displayed to a user from this specific locale
    */
    private ?OrganizationalMessageText $text = null;
    
    /**
     * Instantiates a new organizationalMessageLocalizedText and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageLocalizedText');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageLocalizedText
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageLocalizedText {
        return new OrganizationalMessageLocalizedText();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'locale' => function (ParseNode $n) use ($o) { $o->setLocale($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getObjectValue(array(OrganizationalMessageText::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the locale property value. The locale for this text
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the text property value. The text that will be displayed to a user from this specific locale
     * @return OrganizationalMessageText|null
    */
    public function getText(): ?OrganizationalMessageText {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('locale', $this->locale);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('text', $this->text);
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
     * Sets the locale property value. The locale for this text
     *  @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value ): void {
        $this->locale = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the text property value. The text that will be displayed to a user from this specific locale
     *  @param OrganizationalMessageText|null $value Value to set for the text property.
    */
    public function setText(?OrganizationalMessageText $value ): void {
        $this->text = $value;
    }

}
