<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\CreateNewVersion;

use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\Workflow;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateNewVersionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Workflow|null $workflow The workflow property
    */
    private ?Workflow $workflow = null;
    
    /**
     * Instantiates a new createNewVersionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateNewVersionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateNewVersionPostRequestBody {
        return new CreateNewVersionPostRequestBody();
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
            'workflow' => function (ParseNode $n) use ($o) { $o->setWorkflow($n->getObjectValue(array(Workflow::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the workflow property value. The workflow property
     * @return Workflow|null
    */
    public function getWorkflow(): ?Workflow {
        return $this->workflow;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('workflow', $this->workflow);
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
     * Sets the workflow property value. The workflow property
     *  @param Workflow|null $value Value to set for the workflow property.
    */
    public function setWorkflow(?Workflow $value ): void {
        $this->workflow = $value;
    }

}
