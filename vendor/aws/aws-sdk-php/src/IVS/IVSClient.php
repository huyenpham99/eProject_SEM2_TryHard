<?php
namespace Aws\IVS;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Interactive Video Service** service.
 * @method \Aws\Result batchGetChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetChannelAsync(array $args = [])
 * @method \Aws\Result batchGetStreamKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetStreamKeyAsync(array $args = [])
 * @method \Aws\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \Aws\Result createStreamKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamKeyAsync(array $args = [])
 * @method \Aws\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \Aws\Result deleteStreamKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamKeyAsync(array $args = [])
 * @method \Aws\Result getChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelAsync(array $args = [])
 * @method \Aws\Result getStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStreamAsync(array $args = [])
 * @method \Aws\Result getStreamKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStreamKeyAsync(array $args = [])
 * @method \Aws\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \Aws\Result listStreamKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamKeysAsync(array $args = [])
 * @method \Aws\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetadataAsync(array $args = [])
 * @method \Aws\Result stopStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopStreamAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 */
class IVSClient extends AwsClient {}
