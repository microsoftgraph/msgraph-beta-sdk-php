<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppManagementPolicy extends PolicyBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DirectoryObject>|null $appliesTo The appliesTo property
    */
    private ?array $appliesTo = null;
    
    /**
     * @var bool|null $isEnabled The isEnabled property
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var AppManagementConfiguration|null $restrictions The restrictions property
    */
    private ?AppManagementConfiguration $restrictions = null;
    
    /**
     * Instantiates a new AppManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementPolicy {
        return new AppManagementPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appliesTo property value. The appliesTo property
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        return $this->appliesTo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => function (ParseNode $n) use ($o) { $o->setAppliesTo($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'restrictions' => function (ParseNode $n) use ($o) { $o->setRestrictions($n->getObjectValue(array(AppManagementConfiguration::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the restrictions property value. The restrictions property
     * @return AppManagementConfiguration|null
    */
    public function getRestrictions(): ?AppManagementConfiguration {
        return $this->restrictions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliesTo', $this->appliesTo);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeObjectValue('restrictions', $this->restrictions);
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
     * Sets the appliesTo property value. The appliesTo property
     *  @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the restrictions property value. The restrictions property
     *  @param AppManagementConfiguration|null $value Value to set for the restrictions property.
    */
    public function setRestrictions(?AppManagementConfiguration $value ): void {
        $this->restrictions = $value;
    }

}
