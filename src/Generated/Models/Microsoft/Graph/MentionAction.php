<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MentionAction implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<IdentitySet>|null $mentionees The identities of the users mentioned in this action. */
    private ?array $mentionees = null;
    
    /**
     * Instantiates a new mentionAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MentionAction
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MentionAction {
        return new MentionAction();
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
        return  [
            'mentionees' => function (self $o, ParseNode $n) { $o->setMentionees($n->getCollectionOfObjectValues(IdentitySet::class)); },
        ];
    }

    /**
     * Gets the mentionees property value. The identities of the users mentioned in this action.
     * @return array<IdentitySet>|null
    */
    public function getMentionees(): ?array {
        return $this->mentionees;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('mentionees', $this->mentionees);
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
     * Sets the mentionees property value. The identities of the users mentioned in this action.
     *  @param array<IdentitySet>|null $value Value to set for the mentionees property.
    */
    public function setMentionees(?array $value ): void {
        $this->mentionees = $value;
    }

}
