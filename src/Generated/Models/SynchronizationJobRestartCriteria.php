<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationJobRestartCriteria implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var SynchronizationJobRestartScope|null $resetScope Comma-separated combination of the following values: None, ConnectorDataStore, Escrows, Watermark, QuarantineState, Full, ForceDeletes. The property can also be empty.   None: Starts a paused or quarantined provisioning job. DO NOT USE. Use the Start synchronizationJob API instead.ConnectorDataStore - Clears the underlying cache for all users. DO NOT USE. Contact Microsoft Support for guidance.Escrows - Provisioning failures are marked as escrows and retried. Clearing escrows will stop the service from retrying failures.Watermark - Removing the watermark causes the service to re-evaluate all the users again, rather than just processing changes.QuarantineState - Temporarily lifts the quarantine.Use Full if you want all of the options.ForceDeletes - Forces the system to delete the pending deleted users when using the accidental deletions prevention feature and the deletion threshold is exceeded. Leaving this property empty emulates the Restart provisioning option in the Azure portal. It is similar to setting the resetScope to include QuarantineState, Watermark, and Escrows. This option meets most customer needs.
    */
    private ?SynchronizationJobRestartScope $resetScope = null;
    
    /**
     * Instantiates a new synchronizationJobRestartCriteria and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationJobRestartCriteria');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationJobRestartCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationJobRestartCriteria {
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
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'resetScope' => function (ParseNode $n) use ($o) { $o->setResetScope($n->getEnumValue(SynchronizationJobRestartScope::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the resetScope property value. Comma-separated combination of the following values: None, ConnectorDataStore, Escrows, Watermark, QuarantineState, Full, ForceDeletes. The property can also be empty.   None: Starts a paused or quarantined provisioning job. DO NOT USE. Use the Start synchronizationJob API instead.ConnectorDataStore - Clears the underlying cache for all users. DO NOT USE. Contact Microsoft Support for guidance.Escrows - Provisioning failures are marked as escrows and retried. Clearing escrows will stop the service from retrying failures.Watermark - Removing the watermark causes the service to re-evaluate all the users again, rather than just processing changes.QuarantineState - Temporarily lifts the quarantine.Use Full if you want all of the options.ForceDeletes - Forces the system to delete the pending deleted users when using the accidental deletions prevention feature and the deletion threshold is exceeded. Leaving this property empty emulates the Restart provisioning option in the Azure portal. It is similar to setting the resetScope to include QuarantineState, Watermark, and Escrows. This option meets most customer needs.
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the resetScope property value. Comma-separated combination of the following values: None, ConnectorDataStore, Escrows, Watermark, QuarantineState, Full, ForceDeletes. The property can also be empty.   None: Starts a paused or quarantined provisioning job. DO NOT USE. Use the Start synchronizationJob API instead.ConnectorDataStore - Clears the underlying cache for all users. DO NOT USE. Contact Microsoft Support for guidance.Escrows - Provisioning failures are marked as escrows and retried. Clearing escrows will stop the service from retrying failures.Watermark - Removing the watermark causes the service to re-evaluate all the users again, rather than just processing changes.QuarantineState - Temporarily lifts the quarantine.Use Full if you want all of the options.ForceDeletes - Forces the system to delete the pending deleted users when using the accidental deletions prevention feature and the deletion threshold is exceeded. Leaving this property empty emulates the Restart provisioning option in the Azure portal. It is similar to setting the resetScope to include QuarantineState, Watermark, and Escrows. This option meets most customer needs.
     *  @param SynchronizationJobRestartScope|null $value Value to set for the resetScope property.
    */
    public function setResetScope(?SynchronizationJobRestartScope $value ): void {
        $this->resetScope = $value;
    }

}
