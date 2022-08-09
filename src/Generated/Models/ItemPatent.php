<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class ItemPatent extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $description Descpription of the patent or filing.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Title of the patent or filing.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isPending Indicates the patent is pending.
    */
    private ?bool $isPending = null;
    
    /**
     * @var Date|null $issuedDate The date that the patent was granted.
    */
    private ?Date $issuedDate = null;
    
    /**
     * @var string|null $issuingAuthority Authority which granted the patent.
    */
    private ?string $issuingAuthority = null;
    
    /**
     * @var string|null $number The patent number.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $webUrl URL referencing the patent or filing.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new ItemPatent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemPatent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemPatent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemPatent {
        return new ItemPatent();
    }

    /**
     * Gets the description property value. Descpription of the patent or filing.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Title of the patent or filing.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isPending' => function (ParseNode $n) use ($o) { $o->setIsPending($n->getBooleanValue()); },
            'issuedDate' => function (ParseNode $n) use ($o) { $o->setIssuedDate($n->getDateValue()); },
            'issuingAuthority' => function (ParseNode $n) use ($o) { $o->setIssuingAuthority($n->getStringValue()); },
            'number' => function (ParseNode $n) use ($o) { $o->setNumber($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isPending property value. Indicates the patent is pending.
     * @return bool|null
    */
    public function getIsPending(): ?bool {
        return $this->isPending;
    }

    /**
     * Gets the issuedDate property value. The date that the patent was granted.
     * @return Date|null
    */
    public function getIssuedDate(): ?Date {
        return $this->issuedDate;
    }

    /**
     * Gets the issuingAuthority property value. Authority which granted the patent.
     * @return string|null
    */
    public function getIssuingAuthority(): ?string {
        return $this->issuingAuthority;
    }

    /**
     * Gets the number property value. The patent number.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the webUrl property value. URL referencing the patent or filing.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isPending', $this->isPending);
        $writer->writeDateValue('issuedDate', $this->issuedDate);
        $writer->writeStringValue('issuingAuthority', $this->issuingAuthority);
        $writer->writeStringValue('number', $this->number);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the description property value. Descpription of the patent or filing.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Title of the patent or filing.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isPending property value. Indicates the patent is pending.
     *  @param bool|null $value Value to set for the isPending property.
    */
    public function setIsPending(?bool $value ): void {
        $this->isPending = $value;
    }

    /**
     * Sets the issuedDate property value. The date that the patent was granted.
     *  @param Date|null $value Value to set for the issuedDate property.
    */
    public function setIssuedDate(?Date $value ): void {
        $this->issuedDate = $value;
    }

    /**
     * Sets the issuingAuthority property value. Authority which granted the patent.
     *  @param string|null $value Value to set for the issuingAuthority property.
    */
    public function setIssuingAuthority(?string $value ): void {
        $this->issuingAuthority = $value;
    }

    /**
     * Sets the number property value. The patent number.
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the webUrl property value. URL referencing the patent or filing.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
