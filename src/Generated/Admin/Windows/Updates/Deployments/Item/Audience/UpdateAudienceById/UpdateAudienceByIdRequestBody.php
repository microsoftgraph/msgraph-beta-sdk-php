<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\UpdateAudienceById;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateAudienceByIdRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string>|null $addExclusions  */
    private ?array $addExclusions = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $addMembers  */
    private ?array $addMembers = null;
    
    /** @var string|null $memberEntityType  */
    private ?string $memberEntityType = null;
    
    /** @var array<string>|null $removeExclusions  */
    private ?array $removeExclusions = null;
    
    /** @var array<string>|null $removeMembers  */
    private ?array $removeMembers = null;
    
    /**
     * Instantiates a new updateAudienceByIdRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAudienceByIdRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAudienceByIdRequestBody {
        return new UpdateAudienceByIdRequestBody();
    }

    /**
     * Gets the addExclusions property value. 
     * @return array<string>|null
    */
    public function getAddExclusions(): ?array {
        return $this->addExclusions;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the addMembers property value. 
     * @return array<string>|null
    */
    public function getAddMembers(): ?array {
        return $this->addMembers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'addExclusions' => function (self $o, ParseNode $n) { $o->setAddExclusions($n->getCollectionOfPrimitiveValues()); },
            'addMembers' => function (self $o, ParseNode $n) { $o->setAddMembers($n->getCollectionOfPrimitiveValues()); },
            'memberEntityType' => function (self $o, ParseNode $n) { $o->setMemberEntityType($n->getStringValue()); },
            'removeExclusions' => function (self $o, ParseNode $n) { $o->setRemoveExclusions($n->getCollectionOfPrimitiveValues()); },
            'removeMembers' => function (self $o, ParseNode $n) { $o->setRemoveMembers($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the memberEntityType property value. 
     * @return string|null
    */
    public function getMemberEntityType(): ?string {
        return $this->memberEntityType;
    }

    /**
     * Gets the removeExclusions property value. 
     * @return array<string>|null
    */
    public function getRemoveExclusions(): ?array {
        return $this->removeExclusions;
    }

    /**
     * Gets the removeMembers property value. 
     * @return array<string>|null
    */
    public function getRemoveMembers(): ?array {
        return $this->removeMembers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('addExclusions', $this->addExclusions);
        $writer->writeCollectionOfPrimitiveValues('addMembers', $this->addMembers);
        $writer->writeStringValue('memberEntityType', $this->memberEntityType);
        $writer->writeCollectionOfPrimitiveValues('removeExclusions', $this->removeExclusions);
        $writer->writeCollectionOfPrimitiveValues('removeMembers', $this->removeMembers);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the addExclusions property value. 
     *  @param array<string>|null $value Value to set for the addExclusions property.
    */
    public function setAddExclusions(?array $value ): void {
        $this->addExclusions = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the addMembers property value. 
     *  @param array<string>|null $value Value to set for the addMembers property.
    */
    public function setAddMembers(?array $value ): void {
        $this->addMembers = $value;
    }

    /**
     * Sets the memberEntityType property value. 
     *  @param string|null $value Value to set for the memberEntityType property.
    */
    public function setMemberEntityType(?string $value ): void {
        $this->memberEntityType = $value;
    }

    /**
     * Sets the removeExclusions property value. 
     *  @param array<string>|null $value Value to set for the removeExclusions property.
    */
    public function setRemoveExclusions(?array $value ): void {
        $this->removeExclusions = $value;
    }

    /**
     * Sets the removeMembers property value. 
     *  @param array<string>|null $value Value to set for the removeMembers property.
    */
    public function setRemoveMembers(?array $value ): void {
        $this->removeMembers = $value;
    }

}
