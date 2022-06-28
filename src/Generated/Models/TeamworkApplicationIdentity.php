<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkApplicationIdentity extends Identity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkApplicationIdentityType|null $applicationIdentityType Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, and outgoingWebhook.
    */
    private ?TeamworkApplicationIdentityType $applicationIdentityType = null;
    
    /**
     * Instantiates a new TeamworkApplicationIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkApplicationIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkApplicationIdentity {
        return new TeamworkApplicationIdentity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationIdentityType property value. Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, and outgoingWebhook.
     * @return TeamworkApplicationIdentityType|null
    */
    public function getApplicationIdentityType(): ?TeamworkApplicationIdentityType {
        return $this->applicationIdentityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationIdentityType' => function (ParseNode $n) use ($o) { $o->setApplicationIdentityType($n->getEnumValue(TeamworkApplicationIdentityType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicationIdentityType', $this->applicationIdentityType);
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
     * Sets the applicationIdentityType property value. Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, and outgoingWebhook.
     *  @param TeamworkApplicationIdentityType|null $value Value to set for the applicationIdentityType property.
    */
    public function setApplicationIdentityType(?TeamworkApplicationIdentityType $value ): void {
        $this->applicationIdentityType = $value;
    }

}
