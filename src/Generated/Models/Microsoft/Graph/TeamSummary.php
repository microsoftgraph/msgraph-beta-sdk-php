<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamSummary implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $guestsCount Count of guests in a team. */
    private ?int $guestsCount = null;
    
    /** @var int|null $membersCount Count of members in a team. */
    private ?int $membersCount = null;
    
    /** @var int|null $ownersCount Count of owners in a team. */
    private ?int $ownersCount = null;
    
    /**
     * Instantiates a new teamSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamSummary {
        return new TeamSummary();
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
            'guestsCount' => function (self $o, ParseNode $n) { $o->setGuestsCount($n->getIntegerValue()); },
            'membersCount' => function (self $o, ParseNode $n) { $o->setMembersCount($n->getIntegerValue()); },
            'ownersCount' => function (self $o, ParseNode $n) { $o->setOwnersCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the guestsCount property value. Count of guests in a team.
     * @return int|null
    */
    public function getGuestsCount(): ?int {
        return $this->guestsCount;
    }

    /**
     * Gets the membersCount property value. Count of members in a team.
     * @return int|null
    */
    public function getMembersCount(): ?int {
        return $this->membersCount;
    }

    /**
     * Gets the ownersCount property value. Count of owners in a team.
     * @return int|null
    */
    public function getOwnersCount(): ?int {
        return $this->ownersCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('guestsCount', $this->guestsCount);
        $writer->writeIntegerValue('membersCount', $this->membersCount);
        $writer->writeIntegerValue('ownersCount', $this->ownersCount);
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
     * Sets the guestsCount property value. Count of guests in a team.
     *  @param int|null $value Value to set for the guestsCount property.
    */
    public function setGuestsCount(?int $value ): void {
        $this->guestsCount = $value;
    }

    /**
     * Sets the membersCount property value. Count of members in a team.
     *  @param int|null $value Value to set for the membersCount property.
    */
    public function setMembersCount(?int $value ): void {
        $this->membersCount = $value;
    }

    /**
     * Sets the ownersCount property value. Count of owners in a team.
     *  @param int|null $value Value to set for the ownersCount property.
    */
    public function setOwnersCount(?int $value ): void {
        $this->ownersCount = $value;
    }

}
