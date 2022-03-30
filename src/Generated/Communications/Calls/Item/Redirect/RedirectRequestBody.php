<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\Redirect;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\CallDisposition;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\InvitationParticipantInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedirectRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $callbackUri  */
    private ?string $callbackUri = null;
    
    /** @var bool|null $maskCallee  */
    private ?bool $maskCallee = null;
    
    /** @var bool|null $maskCaller  */
    private ?bool $maskCaller = null;
    
    /** @var CallDisposition|null $targetDisposition  */
    private ?CallDisposition $targetDisposition = null;
    
    /** @var array<InvitationParticipantInfo>|null $targets  */
    private ?array $targets = null;
    
    /** @var int|null $timeout  */
    private ?int $timeout = null;
    
    /**
     * Instantiates a new redirectRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedirectRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RedirectRequestBody {
        return new RedirectRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackUri property value. 
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'callbackUri' => function (self $o, ParseNode $n) { $o->setCallbackUri($n->getStringValue()); },
            'maskCallee' => function (self $o, ParseNode $n) { $o->setMaskCallee($n->getBooleanValue()); },
            'maskCaller' => function (self $o, ParseNode $n) { $o->setMaskCaller($n->getBooleanValue()); },
            'targetDisposition' => function (self $o, ParseNode $n) { $o->setTargetDisposition($n->getEnumValue(CallDisposition::class)); },
            'targets' => function (self $o, ParseNode $n) { $o->setTargets($n->getCollectionOfObjectValues(InvitationParticipantInfo::class)); },
            'timeout' => function (self $o, ParseNode $n) { $o->setTimeout($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the maskCallee property value. 
     * @return bool|null
    */
    public function getMaskCallee(): ?bool {
        return $this->maskCallee;
    }

    /**
     * Gets the maskCaller property value. 
     * @return bool|null
    */
    public function getMaskCaller(): ?bool {
        return $this->maskCaller;
    }

    /**
     * Gets the targetDisposition property value. 
     * @return CallDisposition|null
    */
    public function getTargetDisposition(): ?CallDisposition {
        return $this->targetDisposition;
    }

    /**
     * Gets the targets property value. 
     * @return array<InvitationParticipantInfo>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Gets the timeout property value. 
     * @return int|null
    */
    public function getTimeout(): ?int {
        return $this->timeout;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeBooleanValue('maskCallee', $this->maskCallee);
        $writer->writeBooleanValue('maskCaller', $this->maskCaller);
        $writer->writeEnumValue('targetDisposition', $this->targetDisposition);
        $writer->writeCollectionOfObjectValues('targets', $this->targets);
        $writer->writeIntegerValue('timeout', $this->timeout);
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
     * Sets the callbackUri property value. 
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the maskCallee property value. 
     *  @param bool|null $value Value to set for the maskCallee property.
    */
    public function setMaskCallee(?bool $value ): void {
        $this->maskCallee = $value;
    }

    /**
     * Sets the maskCaller property value. 
     *  @param bool|null $value Value to set for the maskCaller property.
    */
    public function setMaskCaller(?bool $value ): void {
        $this->maskCaller = $value;
    }

    /**
     * Sets the targetDisposition property value. 
     *  @param CallDisposition|null $value Value to set for the targetDisposition property.
    */
    public function setTargetDisposition(?CallDisposition $value ): void {
        $this->targetDisposition = $value;
    }

    /**
     * Sets the targets property value. 
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

    /**
     * Sets the timeout property value. 
     *  @param int|null $value Value to set for the timeout property.
    */
    public function setTimeout(?int $value ): void {
        $this->timeout = $value;
    }

}
