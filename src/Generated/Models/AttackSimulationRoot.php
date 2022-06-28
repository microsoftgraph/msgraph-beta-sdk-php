<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttackSimulationRoot extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SimulationAutomation>|null $simulationAutomations Represents simulation automations created to run on a tenant.
    */
    private ?array $simulationAutomations = null;
    
    /**
     * @var array<Simulation>|null $simulations Represents an attack simulation training campaign in a tenant.
    */
    private ?array $simulations = null;
    
    /**
     * Instantiates a new AttackSimulationRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationRoot {
        return new AttackSimulationRoot();
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
        return array_merge(parent::getFieldDeserializers(), [
            'simulationAutomations' => function (ParseNode $n) use ($o) { $o->setSimulationAutomations($n->getCollectionOfObjectValues(array(SimulationAutomation::class, 'createFromDiscriminatorValue'))); },
            'simulations' => function (ParseNode $n) use ($o) { $o->setSimulations($n->getCollectionOfObjectValues(array(Simulation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the simulationAutomations property value. Represents simulation automations created to run on a tenant.
     * @return array<SimulationAutomation>|null
    */
    public function getSimulationAutomations(): ?array {
        return $this->simulationAutomations;
    }

    /**
     * Gets the simulations property value. Represents an attack simulation training campaign in a tenant.
     * @return array<Simulation>|null
    */
    public function getSimulations(): ?array {
        return $this->simulations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('simulationAutomations', $this->simulationAutomations);
        $writer->writeCollectionOfObjectValues('simulations', $this->simulations);
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
     * Sets the simulationAutomations property value. Represents simulation automations created to run on a tenant.
     *  @param array<SimulationAutomation>|null $value Value to set for the simulationAutomations property.
    */
    public function setSimulationAutomations(?array $value ): void {
        $this->simulationAutomations = $value;
    }

    /**
     * Sets the simulations property value. Represents an attack simulation training campaign in a tenant.
     *  @param array<Simulation>|null $value Value to set for the simulations property.
    */
    public function setSimulations(?array $value ): void {
        $this->simulations = $value;
    }

}
