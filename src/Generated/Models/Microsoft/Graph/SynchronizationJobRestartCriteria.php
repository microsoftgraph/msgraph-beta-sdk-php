<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationJobRestartCriteria implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var SynchronizationJobRestartScope|null $resetScope Comma-separated combination of the following values: Full, QuarantineState, Watermark, Escrows, ConnectorDataStore. Use Full if you want all of the options. */
    private ?SynchronizationJobRestartScope $resetScope = null;
    
    /**
     * Instantiates a new synchronizationJobRestartCriteria and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationJobRestartCriteria
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationJobRestartCriteria {
        return new SynchronizationJobRestartCriteria();
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
            'resetScope' => function (self $o, ParseNode $n) { $o->setResetScope($n->getEnumValue(SynchronizationJobRestartScope::class)); },
        ];
    }

    /**
     * Gets the resetScope property value. Comma-separated combination of the following values: Full, QuarantineState, Watermark, Escrows, ConnectorDataStore. Use Full if you want all of the options.
     * @return SynchronizationJobRestartScope|null
    */
    public function getResetScope(): ?SynchronizationJobRestartScope {
        return $this->resetScope;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('resetScope', $this->resetScope);
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
     * Sets the resetScope property value. Comma-separated combination of the following values: Full, QuarantineState, Watermark, Escrows, ConnectorDataStore. Use Full if you want all of the options.
     *  @param SynchronizationJobRestartScope|null $value Value to set for the resetScope property.
    */
    public function setResetScope(?SynchronizationJobRestartScope $value ): void {
        $this->resetScope = $value;
    }

}
