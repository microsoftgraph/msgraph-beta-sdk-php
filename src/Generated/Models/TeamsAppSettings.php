<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $isChatResourceSpecificConsentEnabled The isChatResourceSpecificConsentEnabled property
    */
    private ?bool $isChatResourceSpecificConsentEnabled = null;
    
    /**
     * Instantiates a new teamsAppSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppSettings {
        return new TeamsAppSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isChatResourceSpecificConsentEnabled' => function (ParseNode $n) use ($o) { $o->setIsChatResourceSpecificConsentEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isChatResourceSpecificConsentEnabled property value. The isChatResourceSpecificConsentEnabled property
     * @return bool|null
    */
    public function getIsChatResourceSpecificConsentEnabled(): ?bool {
        return $this->isChatResourceSpecificConsentEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isChatResourceSpecificConsentEnabled', $this->isChatResourceSpecificConsentEnabled);
    }

    /**
     * Sets the isChatResourceSpecificConsentEnabled property value. The isChatResourceSpecificConsentEnabled property
     *  @param bool|null $value Value to set for the isChatResourceSpecificConsentEnabled property.
    */
    public function setIsChatResourceSpecificConsentEnabled(?bool $value ): void {
        $this->isChatResourceSpecificConsentEnabled = $value;
    }

}
