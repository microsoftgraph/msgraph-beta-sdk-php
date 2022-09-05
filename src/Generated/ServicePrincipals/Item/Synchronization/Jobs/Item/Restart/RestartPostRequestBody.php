<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Restart;

use Microsoft\Graph\Beta\Generated\Models\SynchronizationJobRestartCriteria;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestartPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var SynchronizationJobRestartCriteria|null $criteria The criteria property
    */
    private ?SynchronizationJobRestartCriteria $criteria = null;
    
    /**
     * Instantiates a new restartPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestartPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestartPostRequestBody {
        return new RestartPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the criteria property value. The criteria property
     * @return SynchronizationJobRestartCriteria|null
    */
    public function getCriteria(): ?SynchronizationJobRestartCriteria {
        return $this->criteria;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'criteria' => function (ParseNode $n) use ($o) { $o->setCriteria($n->getObjectValue(array(SynchronizationJobRestartCriteria::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('criteria', $this->criteria);
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
     * Sets the criteria property value. The criteria property
     *  @param SynchronizationJobRestartCriteria|null $value Value to set for the criteria property.
    */
    public function setCriteria(?SynchronizationJobRestartCriteria $value ): void {
        $this->criteria = $value;
    }

}
