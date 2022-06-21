<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamDiscoverySettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $showInTeamsSearchAndSuggestions If set to true, the team is visible via search and suggestions from the Teams client.
    */
    private ?bool $showInTeamsSearchAndSuggestions = null;
    
    /**
     * Instantiates a new teamDiscoverySettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamDiscoverySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamDiscoverySettings {
        return new TeamDiscoverySettings();
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
            'showInTeamsSearchAndSuggestions' => function (ParseNode $n) use ($o) { $o->setShowInTeamsSearchAndSuggestions($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the showInTeamsSearchAndSuggestions property value. If set to true, the team is visible via search and suggestions from the Teams client.
     * @return bool|null
    */
    public function getShowInTeamsSearchAndSuggestions(): ?bool {
        return $this->showInTeamsSearchAndSuggestions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('showInTeamsSearchAndSuggestions', $this->showInTeamsSearchAndSuggestions);
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
     * Sets the showInTeamsSearchAndSuggestions property value. If set to true, the team is visible via search and suggestions from the Teams client.
     *  @param bool|null $value Value to set for the showInTeamsSearchAndSuggestions property.
    */
    public function setShowInTeamsSearchAndSuggestions(?bool $value ): void {
        $this->showInTeamsSearchAndSuggestions = $value;
    }

}
