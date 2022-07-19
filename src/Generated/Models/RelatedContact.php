<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedContact implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $accessConsent Indicates whether the user has been consented to access student data.
    */
    private ?bool $accessConsent = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Name of the contact. Required.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $emailAddress Email address of the contact.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $mobilePhone Mobile phone number of the contact.
    */
    private ?string $mobilePhone = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ContactRelationship|null $relationship The relationship property
    */
    private ?ContactRelationship $relationship = null;
    
    /**
     * Instantiates a new relatedContact and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.relatedContact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedContact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedContact {
        return new RelatedContact();
    }

    /**
     * Gets the accessConsent property value. Indicates whether the user has been consented to access student data.
     * @return bool|null
    */
    public function getAccessConsent(): ?bool {
        return $this->accessConsent;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Name of the contact. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddress property value. Email address of the contact.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessConsent' => function (ParseNode $n) use ($o) { $o->setAccessConsent($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'emailAddress' => function (ParseNode $n) use ($o) { $o->setEmailAddress($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'mobilePhone' => function (ParseNode $n) use ($o) { $o->setMobilePhone($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'relationship' => function (ParseNode $n) use ($o) { $o->setRelationship($n->getEnumValue(ContactRelationship::class)); },
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the mobilePhone property value. Mobile phone number of the contact.
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->mobilePhone;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the relationship property value. The relationship property
     * @return ContactRelationship|null
    */
    public function getRelationship(): ?ContactRelationship {
        return $this->relationship;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('accessConsent', $this->accessConsent);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('mobilePhone', $this->mobilePhone);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('relationship', $this->relationship);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessConsent property value. Indicates whether the user has been consented to access student data.
     *  @param bool|null $value Value to set for the accessConsent property.
    */
    public function setAccessConsent(?bool $value ): void {
        $this->accessConsent = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the displayName property value. Name of the contact. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddress property value. Email address of the contact.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the mobilePhone property value. Mobile phone number of the contact.
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value ): void {
        $this->mobilePhone = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the relationship property value. The relationship property
     *  @param ContactRelationship|null $value Value to set for the relationship property.
    */
    public function setRelationship(?ContactRelationship $value ): void {
        $this->relationship = $value;
    }

}
