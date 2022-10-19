<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommentAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isReply If true, this activity was a reply to an existing comment thread.
    */
    private ?bool $isReply = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var IdentitySet|null $parentAuthor The identity of the user who started the comment thread.
    */
    private ?IdentitySet $parentAuthor = null;
    
    /**
     * @var array<IdentitySet>|null $participants The identities of the users participating in this comment thread.
    */
    private ?array $participants = null;
    
    /**
     * Instantiates a new commentAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.commentAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommentAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommentAction {
        return new CommentAction();
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
            'isReply' => fn(ParseNode $n) => $o->setIsReply($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parentAuthor' => fn(ParseNode $n) => $o->setParentAuthor($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isReply property value. If true, this activity was a reply to an existing comment thread.
     * @return bool|null
    */
    public function getIsReply(): ?bool {
        return $this->isReply;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the parentAuthor property value. The identity of the user who started the comment thread.
     * @return IdentitySet|null
    */
    public function getParentAuthor(): ?IdentitySet {
        return $this->parentAuthor;
    }

    /**
     * Gets the participants property value. The identities of the users participating in this comment thread.
     * @return array<IdentitySet>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isReply', $this->isReply);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('parentAuthor', $this->parentAuthor);
        $writer->writeCollectionOfObjectValues('participants', $this->participants);
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
     * Sets the isReply property value. If true, this activity was a reply to an existing comment thread.
     *  @param bool|null $value Value to set for the isReply property.
    */
    public function setIsReply(?bool $value ): void {
        $this->isReply = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the parentAuthor property value. The identity of the user who started the comment thread.
     *  @param IdentitySet|null $value Value to set for the parentAuthor property.
    */
    public function setParentAuthor(?IdentitySet $value ): void {
        $this->parentAuthor = $value;
    }

    /**
     * Sets the participants property value. The identities of the users participating in this comment thread.
     *  @param array<IdentitySet>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

}
