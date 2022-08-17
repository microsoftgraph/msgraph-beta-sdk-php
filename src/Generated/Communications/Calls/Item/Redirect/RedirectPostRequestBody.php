<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\Redirect;

use Microsoft\Graph\Beta\Generated\Models\CallDisposition;
use Microsoft\Graph\Beta\Generated\Models\InvitationParticipantInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedirectPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $callbackUri The callbackUri property
    */
    private ?string $callbackUri = null;
    
    /**
     * @var bool|null $maskCallee The maskCallee property
    */
    private ?bool $maskCallee = null;
    
    /**
     * @var bool|null $maskCaller The maskCaller property
    */
    private ?bool $maskCaller = null;
    
    /**
     * @var CallDisposition|null $targetDisposition The targetDisposition property
    */
    private ?CallDisposition $targetDisposition = null;
    
    /**
     * @var array<InvitationParticipantInfo>|null $targets The targets property
    */
    private ?array $targets = null;
    
    /**
     * @var int|null $timeout The timeout property
    */
    private ?int $timeout = null;
    
    /**
     * Instantiates a new redirectPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedirectPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedirectPostRequestBody {
        return new RedirectPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackUri property value. The callbackUri property
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
        $o = $this;
        return  [
            'callbackUri' => function (ParseNode $n) use ($o) { $o->setCallbackUri($n->getStringValue()); },
            'maskCallee' => function (ParseNode $n) use ($o) { $o->setMaskCallee($n->getBooleanValue()); },
            'maskCaller' => function (ParseNode $n) use ($o) { $o->setMaskCaller($n->getBooleanValue()); },
            'targetDisposition' => function (ParseNode $n) use ($o) { $o->setTargetDisposition($n->getEnumValue(CallDisposition::class)); },
            'targets' => function (ParseNode $n) use ($o) { $o->setTargets($n->getCollectionOfObjectValues(array(InvitationParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'timeout' => function (ParseNode $n) use ($o) { $o->setTimeout($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the maskCallee property value. The maskCallee property
     * @return bool|null
    */
    public function getMaskCallee(): ?bool {
        return $this->maskCallee;
    }

    /**
     * Gets the maskCaller property value. The maskCaller property
     * @return bool|null
    */
    public function getMaskCaller(): ?bool {
        return $this->maskCaller;
    }

    /**
     * Gets the targetDisposition property value. The targetDisposition property
     * @return CallDisposition|null
    */
    public function getTargetDisposition(): ?CallDisposition {
        return $this->targetDisposition;
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<InvitationParticipantInfo>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Gets the timeout property value. The timeout property
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
     * Sets the callbackUri property value. The callbackUri property
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the maskCallee property value. The maskCallee property
     *  @param bool|null $value Value to set for the maskCallee property.
    */
    public function setMaskCallee(?bool $value ): void {
        $this->maskCallee = $value;
    }

    /**
     * Sets the maskCaller property value. The maskCaller property
     *  @param bool|null $value Value to set for the maskCaller property.
    */
    public function setMaskCaller(?bool $value ): void {
        $this->maskCaller = $value;
    }

    /**
     * Sets the targetDisposition property value. The targetDisposition property
     *  @param CallDisposition|null $value Value to set for the targetDisposition property.
    */
    public function setTargetDisposition(?CallDisposition $value ): void {
        $this->targetDisposition = $value;
    }

    /**
     * Sets the targets property value. The targets property
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

    /**
     * Sets the timeout property value. The timeout property
     *  @param int|null $value Value to set for the timeout property.
    */
    public function setTimeout(?int $value ): void {
        $this->timeout = $value;
    }

}
