<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectGroup extends LabelActionBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowEmailFromGuestUsers The allowEmailFromGuestUsers property
    */
    private ?bool $allowEmailFromGuestUsers = null;
    
    /**
     * @var bool|null $allowGuestUsers The allowGuestUsers property
    */
    private ?bool $allowGuestUsers = null;
    
    /**
     * @var GroupPrivacy|null $privacy The privacy property
    */
    private ?GroupPrivacy $privacy = null;
    
    /**
     * Instantiates a new ProtectGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectGroup {
        return new ProtectGroup();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowEmailFromGuestUsers property value. The allowEmailFromGuestUsers property
     * @return bool|null
    */
    public function getAllowEmailFromGuestUsers(): ?bool {
        return $this->allowEmailFromGuestUsers;
    }

    /**
     * Gets the allowGuestUsers property value. The allowGuestUsers property
     * @return bool|null
    */
    public function getAllowGuestUsers(): ?bool {
        return $this->allowGuestUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowEmailFromGuestUsers' => function (ParseNode $n) use ($o) { $o->setAllowEmailFromGuestUsers($n->getBooleanValue()); },
            'allowGuestUsers' => function (ParseNode $n) use ($o) { $o->setAllowGuestUsers($n->getBooleanValue()); },
            'privacy' => function (ParseNode $n) use ($o) { $o->setPrivacy($n->getEnumValue(GroupPrivacy::class)); },
        ]);
    }

    /**
     * Gets the privacy property value. The privacy property
     * @return GroupPrivacy|null
    */
    public function getPrivacy(): ?GroupPrivacy {
        return $this->privacy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowEmailFromGuestUsers', $this->allowEmailFromGuestUsers);
        $writer->writeBooleanValue('allowGuestUsers', $this->allowGuestUsers);
        $writer->writeEnumValue('privacy', $this->privacy);
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
     * Sets the allowEmailFromGuestUsers property value. The allowEmailFromGuestUsers property
     *  @param bool|null $value Value to set for the allowEmailFromGuestUsers property.
    */
    public function setAllowEmailFromGuestUsers(?bool $value ): void {
        $this->allowEmailFromGuestUsers = $value;
    }

    /**
     * Sets the allowGuestUsers property value. The allowGuestUsers property
     *  @param bool|null $value Value to set for the allowGuestUsers property.
    */
    public function setAllowGuestUsers(?bool $value ): void {
        $this->allowGuestUsers = $value;
    }

    /**
     * Sets the privacy property value. The privacy property
     *  @param GroupPrivacy|null $value Value to set for the privacy property.
    */
    public function setPrivacy(?GroupPrivacy $value ): void {
        $this->privacy = $value;
    }

}
